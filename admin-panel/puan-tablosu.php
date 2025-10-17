<?php
session_start();
require '../db.php'; // Veritabanı bağlantısı

if (!isset($_SESSION['admin'])) {
    header('Location: admin-login.php');
    exit;
}

// Düzenleme için mevcut takım
$editTakim = null;
if (isset($_GET['edit'])) {
    $editId = (int)$_GET['edit'];
    $stmt = $conn->prepare("SELECT * FROM puan_tablosu WHERE id = ?");
    $stmt->bind_param("i", $editId);
    $stmt->execute();
    $result = $stmt->get_result();
    $editTakim = $result->fetch_assoc();
    $stmt->close();
}

// Ekleme/Güncelleme işlemi
if (isset($_POST['save'])) {
    $id = $_POST['id'] ?? 0;
    $takim_adi = trim($_POST['takim_adi']);
    $puan = (int)$_POST['puan'];
    $renk = trim($_POST['renk']);
    
    $logoPath = $_POST['eski_logo'] ?? null;
    if (isset($_FILES['logo']) && $_FILES['logo']['error'] === 0) {
        $ext = strtolower(pathinfo($_FILES['logo']['name'], PATHINFO_EXTENSION));
        $allowed = ['jpg','jpeg','png','gif','webp'];
        if (in_array($ext, $allowed)) {
            $uploadDir = '../assets/img/';
            if(!is_dir($uploadDir)) mkdir($uploadDir,0755,true);
            $filename = uniqid('logo_').'.'.$ext;
            move_uploaded_file($_FILES['logo']['tmp_name'], $uploadDir.$filename);
            $logoPath = 'assets/img/'.$filename;
        }
    }

    if ($id > 0) {
        $stmt = $conn->prepare("UPDATE puan_tablosu SET takim_adi=?, puan=?, renk=?, logo=? WHERE id=?");
        $stmt->bind_param("sissi", $takim_adi, $puan, $renk, $logoPath, $id);
        $stmt->execute();
        $stmt->close();
    } else {
        // Yeni ekleme
        $maxSira = $conn->query("SELECT MAX(sira) as maxsira FROM puan_tablosu")->fetch_assoc()['maxsira'];
        $sira = $maxSira + 1;
        $stmt = $conn->prepare("INSERT INTO puan_tablosu (takim_adi, puan, renk, logo, sira) VALUES (?,?,?,?,?)");
        $stmt->bind_param("sisii", $takim_adi, $puan, $renk, $logoPath, $sira);
        $stmt->execute();
        $stmt->close();
    }
    header('Location: puan-tablosu.php');
    exit;
}

// Silme
if (isset($_GET['delete'])) {
    $id = (int)$_GET['delete'];
    $stmt = $conn->prepare("DELETE FROM puan_tablosu WHERE id = ?");
    $stmt->bind_param("i",$id);
    $stmt->execute();
    $stmt->close();
    header('Location: puan-tablosu.php');
    exit;
}

// Takımları çek
$takimlar = $conn->query("SELECT * FROM puan_tablosu ORDER BY sira ASC");
?>
<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="UTF-8">
<title>Admin Paneli - Puan Tablosu</title>
<link rel="stylesheet" href="style.css">
<style>
td { max-width: 300px; white-space: normal; word-wrap: break-word; vertical-align: top; }
table { border-collapse: collapse; width: 100%; margin-top: 20px;}
th, td { border:1px solid #ccc; padding:8px; text-align:left;}
th { background:#f5f5f5;}
img { border-radius:5px; }
form { margin-bottom: 30px; }
form div { display: flex; gap: 10px; align-items: center; margin-top: 10px; }
a.btn { background: #007bff; color: #fff; padding: 6px 10px; text-decoration: none; border-radius: 5px; }
a.btn:hover { background: #0056b3; }
button { background: #28a745; color: #fff; padding: 6px 10px; border: none; border-radius: 5px; cursor: pointer; }
button:hover { background: #218838; }
</style>
</head>
<body>
<header class="topbar">
  <h1>Admin Paneli - Puan Tablosu</h1>
  <div class="right"><a href="logout.php">Çıkış</a></div>
</header>

<main class="container">

<!-- Takım Ekle/Düzenle -->
<section class="card">
    <h2><?= $editTakim ? "Takımı Düzenle (#{$editTakim['id']})" : "Yeni Takım Ekle" ?></h2>
    <form method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $editTakim['id'] ?? '' ?>">
        <input type="hidden" name="eski_logo" value="<?= $editTakim['logo'] ?? '' ?>">
        
        <label>Takım Adı:</label><br>
        <input type="text" name="takim_adi" required value="<?= htmlspecialchars($editTakim['takim_adi'] ?? '') ?>"><br><br>

        <label>Puan:</label><br>
        <input type="number" name="puan" required value="<?= $editTakim['puan'] ?? 0 ?>"><br><br>

        <label>Renk:</label><br>
        <input type="text" name="renk" placeholder="Bar renk (hex veya isim)" value="<?= htmlspecialchars($editTakim['renk'] ?? '') ?>"><br><br>

        <label>Logo:</label><br>
        <input type="file" name="logo"><br>
        <?php if(!empty($editTakim['logo'])): ?>
            <p>Mevcut logo:<br><img src="../<?= $editTakim['logo'] ?>" width="80"></p>
        <?php endif; ?>

        <div>
            <button type="submit" name="save"><?= $editTakim ? "Güncelle" : "Ekle" ?></button>
            <a class="btn" href="admin-panel.php">← Geri</a>
        </div>
    </form>
</section>

<!-- Mevcut Takımlar -->
<section class="card">
    <h2>Mevcut Takımlar</h2>
    <table>
        <tr>
            <th>ID</th><th>Takım</th><th>Logo</th><th>Puan</th><th>Renk</th><th>İşlem</th>
        </tr>
        <?php while($t = $takimlar->fetch_assoc()): ?>
        <tr>
            <td><?= $t['id'] ?></td>
            <td><?= htmlspecialchars($t['takim_adi']) ?></td>
            <td><?php if($t['logo']): ?><img src="../<?= $t['logo'] ?>" width="40"><?php endif; ?></td>
            <td><?= $t['puan'] ?></td>
            <td style="background:<?= htmlspecialchars($t['renk']) ?>; color:#fff;"><?= htmlspecialchars($t['renk']) ?></td>
            <td>
                <a class="btn" href="puan-tablosu.php?edit=<?= $t['id'] ?>">Düzenle</a>
                <a class="btn" href="puan-tablosu.php?delete=<?= $t['id'] ?>" onclick="return confirm('Silinsin mi?')">Sil</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</section>

</main>
</body>
</html>
