<?php
session_start();
require 'db.php';
if (!isset($_SESSION['admin'])) {
    header('Location: admin-login.php');
    exit;
}

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Aktif sekme
$tab = $_GET['tab'] ?? 'haber-ekle';
$msg = '';
$duzenlenecekHaber = null;

// --- HABER DÜZENLEME (GET ile id gelirse) ---
if (isset($_GET['edit']) && is_numeric($_GET['edit'])) {
    $editId = (int)$_GET['edit'];
    $stmt = $conn->prepare("SELECT * FROM haberler WHERE id=?");
    $stmt->bind_param("i", $editId);
    $stmt->execute();
    $duzenlenecekHaber = $stmt->get_result()->fetch_assoc();
    $stmt->close();
    $tab = 'haber-ekle';
}

// --- HABER EKLEME veya GÜNCELLEME ---
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $baslik = trim($_POST['baslik'] ?? '');
    $icerik = trim($_POST['icerik'] ?? '');
    $tarih = date('Y-m-d H:i:s');
    $resimYolu = '';
    $isUpdate = isset($_POST['haber_id']);

    // Resim yükleme
    if (!empty($_FILES['resim']['name'])) {
        $uploadsDir = realpath(__DIR__ . '/../uploads');
        if (!$uploadsDir) {
            mkdir(__DIR__ . '/../uploads', 0777, true); // klasör yoksa oluştur
            $uploadsDir = realpath(__DIR__ . '/../uploads');
        }
        $dosyaAdi = time() . '_' . basename($_FILES['resim']['name']);
        $hedef = $uploadsDir . DIRECTORY_SEPARATOR . $dosyaAdi;
        if (move_uploaded_file($_FILES['resim']['tmp_name'], $hedef)) {
            $resimYolu = 'uploads/' . $dosyaAdi;
        } else {
            $msg = "❌ Resim yüklenemedi!";
        }
    }

    if ($isUpdate) {
        $id = (int)$_POST['haber_id'];
        if (!$resimYolu && !empty($_POST['mevcut_resim'])) {
            $resimYolu = $_POST['mevcut_resim'];
        }

        $stmt = $conn->prepare("UPDATE haberler SET baslik=?, icerik=?, resim=? WHERE id=?");
        $stmt->bind_param("sssi", $baslik, $icerik, $resimYolu, $id);
        $stmt->execute();
        $stmt->close();
        $msg = "✅ Haber başarıyla güncellendi.";
    } else {
        $stmt = $conn->prepare("INSERT INTO haberler (baslik, icerik, resim, tarih) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $baslik, $icerik, $resimYolu, $tarih);
        $stmt->execute();
        $stmt->close();
        $msg = "✅ Haber başarıyla eklendi.";
    }
}

// --- Silme işlemleri (yorum silme) ---
if (isset($_GET['delete_yorum']) && is_numeric($_GET['delete_yorum'])) {
    $delId = (int)$_GET['delete_yorum'];
    $delStmt = $conn->prepare("DELETE FROM yorumlar WHERE id = ?");
    $delStmt->bind_param("i", $delId);
    $delStmt->execute();
    $delStmt->close();
    header('Location: admin-panel.php?tab=yorumlar');
    exit;
}

// --- Veritabanı sorguları ---
$mesajlar = $conn->query("SELECT * FROM mesajlar ORDER BY tarih DESC");

// Yorumları çek
$yorumlar = $conn->query("
    SELECT y.*, u.id AS user_id, u.username, u.email, h.baslik AS haber_baslik
    FROM yorumlar y
    LEFT JOIN kullanıcılar u ON y.user_id = u.id
    LEFT JOIN haberler h ON y.haber_id = h.id
    ORDER BY y.tarih DESC
");
?>
<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="UTF-8">
<title>Admin Paneli</title>
<style>
body{font-family:Arial,sans-serif;background:#f5f6f7;margin:0;}
header{background:#2c3e50;color:#fff;padding:15px;display:flex;justify-content:space-between;align-items:center;}
.container{padding:20px;}
nav{display:flex;gap:10px;flex-wrap:wrap;justify-content:center;margin-bottom:20px;}
nav a{background:#007bff;color:#fff;padding:10px 18px;text-decoration:none;border-radius:6px;transition:0.2s;}
nav a:hover{background:#0056b3;}
nav a.active{background:#28a745;}
.card{background:#fff;padding:20px;border-radius:10px;box-shadow:0 2px 6px rgba(0,0,0,0.1);margin-bottom:20px;}
input[type=text], textarea{width:100%;padding:10px;margin:6px 0 12px;border:1px solid #ccc;border-radius:4px;}
button{background:#28a745;color:#fff;padding:10px 18px;border:none;border-radius:4px;cursor:pointer;}
button:hover{opacity:0.9;}
img.thumb{max-width:120px;max-height:80px;border-radius:4px;margin-top:8px;}
table{width:100%;border-collapse:collapse;margin-top:15px;}
th,td{border:1px solid #ccc;padding:8px;text-align:left;vertical-align:top;}
th{background:#eee;}
.actions a{margin-right:8px;color:#007bff;text-decoration:none;}
.actions a:hover{text-decoration:underline;}
.top-info{display:flex;gap:12px;align-items:center;}
.logout-form{display:inline;margin:0;padding:0;}
.btn-plain{background:none;border:none;color:#fff;cursor:pointer;padding:0;font:inherit;text-decoration:underline;}
.small-muted{font-size:12px;color:#666;}
.success{background:#d4edda;color:#155724;padding:10px;border-radius:6px;margin-bottom:10px;border:1px solid #c3e6cb;}
.error{background:#f8d7da;color:#721c24;padding:10px;border-radius:6px;margin-bottom:10px;border:1px solid #f5c6cb;}
</style>
</head>
<body>
<header>
  <h1>Admin Paneli</h1>
  <div class="top-info">
    <div>Hoşgeldin, <?= htmlspecialchars($_SESSION['admin']['username']) ?></div>
    <form method="post" action="/futbol_haberleri/logout.php" class="logout-form">
      <button type="submit" class="btn-plain">Çıkış Yap</button>
    </form>
  </div>
</header>

<div class="container">
  <!-- Sekmeler -->
<nav>
  <a href="ana-sayfa-haber-ekle.php" class="">Ana Sayfa Haber Ekle</a>
  <a href="?tab=mesajlar" class="<?= $tab=='mesajlar'?'active':'' ?>">Mesajlar / Forum</a>
  <a href="yorumlar.php">Yorumlar</a>
  <a href="puan-tablosu.php">Puan Tablosu</a>
  <a href="haftanin-karsilasmalar.php">Haftanın Karşılaşmaları</a>
  <a href="gunun-haberleri.php">Günün Haberleri</a>
  <a href="son-dakika-haberleri.php">Son Dakika</a>
  <a href="gunun-yorumu.php">Günün Yorumu</a>
</nav>

  <!-- Haber Ekleme / Düzenleme -->
  <?php if($tab == 'haber-ekle'): ?>
  <section class="card">
    <h2><?= $duzenlenecekHaber ? "Haberi Düzenle" : "Yeni Haber Ekle" ?></h2>
    <?php if($msg): ?>
      <div class="<?= str_contains($msg,'✅') ? 'success' : 'error' ?>">
        <?= htmlspecialchars($msg) ?>
      </div>
    <?php endif; ?>

    <form method="post" enctype="multipart/form-data">
      <?php if($duzenlenecekHaber): ?>
        <input type="hidden" name="haber_id" value="<?= $duzenlenecekHaber['id'] ?>">
      <?php endif; ?>

      <label>Başlık</label>
      <input type="text" name="baslik" required value="<?= htmlspecialchars($duzenlenecekHaber['baslik'] ?? '') ?>">

      <label>Haber İçeriği</label>
      <textarea name="icerik" required rows="6"><?= htmlspecialchars($duzenlenecekHaber['icerik'] ?? '') ?></textarea>

      <?php if(!empty($duzenlenecekHaber['resim'])): ?>
        <p>Mevcut Resim:</p>
        <img src="../<?= htmlspecialchars($duzenlenecekHaber['resim']) ?>" class="thumb">
        <input type="hidden" name="mevcut_resim" value="<?= htmlspecialchars($duzenlenecekHaber['resim']) ?>">
      <?php endif; ?>

      <p>Yeni Resim (seçersen eskiyi değiştirir):</p>
      <input type="file" name="resim" accept="image/*"><br><br>

      <button type="submit"><?= $duzenlenecekHaber ? "Güncelle" : "Kaydet" ?></button>
    </form>
  </section>
  <?php endif; ?>

  <!-- Mesajlar / Forum -->
  <?php if($tab == 'mesajlar'): ?>
  <section class="card">
    <h2>Mesajlar / Forum</h2>
    <table>
      <tr><th>ID</th><th>İsim</th><th>Email</th><th>Konu</th><th>Mesaj</th><th>Tarih</th><th>Sil</th></tr>
      <?php while($m = $mesajlar->fetch_assoc()): ?>
      <tr>
        <td><?= $m['id'] ?></td>
        <td><?= htmlspecialchars($m['isim']) ?></td>
        <td><?= htmlspecialchars($m['email']) ?></td>
        <td><?= htmlspecialchars($m['konu']) ?></td>
        <td><?= nl2br(htmlspecialchars($m['mesaj'])) ?></td>
        <td class="small-muted"><?= $m['tarih'] ?></td>
        <td><a href="mesajlar.php?delete=<?= $m['id'] ?>" onclick="return confirm('Silinsin mi?')">Sil</a></td>
      </tr>
      <?php endwhile; ?>
    </table>
  </section>
  <?php endif; ?>
</div>
</body>
</html>