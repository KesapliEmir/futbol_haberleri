<?php
session_start();
require 'db.php';

$error = '';
$success = '';
$email = '';
$username = '';
$showRegister = false;

// register sayfasını açmak için action parametresi
if (isset($_GET['action']) && $_GET['action'] === 'register') {
    $showRegister = true;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    // tüm alanların dolu olup olmadığını kontrol
    if ($email === '' || $password === '' || ($showRegister && $username === '')) {
        $error = 'Lütfen tüm alanları doldurun!';
    } else {
        if ($showRegister && isset($_POST['register'])) {
            // eğer @ yoksa @admin.com ekle
            $email = (strpos($email, '@') === false) ? $email . '@admin.com' : $email;

            // şifre kontrolü
            if (strlen($password) < 6) {
                $error = "Şifreniz çok kısa, en az 6 karakter olmalı.";
            } elseif (!preg_match('/[_]/', $password)) {
                $error = "Şifreniz en az bir '_' karakteri içermelidir.";
            } else {
                // admin zaten kayıtlı mı
                $stmt = $conn->prepare("SELECT id FROM adminler WHERE email=?");
                $stmt->bind_param('s', $email);
                $stmt->execute();
                $stmt->store_result();
                $userExists = $stmt->num_rows > 0;
                $stmt->close();

                if ($userExists) {
                    $error = 'Bu e-posta zaten kayıtlı!';
                } else {
                    // kayıt işlemi
                    $stmt = $conn->prepare("INSERT INTO adminler (username,email,password) VALUES (?,?,?)");
                    $stmt->bind_param('sss', $username, $email, $password);
                    if ($stmt->execute()) {
                        $success = '✅ Kayıt başarılı! Şimdi admin girişinden giriş yapabilirsiniz.';
                        // form alanlarını temizle
                        $username = '';
                        $email = '';
                        $_POST = [];
                    } else {
                        $error = 'Kayıt hatası: ' . $stmt->error;
                    }
                    $stmt->close();
                }
            }
        } elseif (isset($_POST['login'])) {
            // admin login
            $stmt = $conn->prepare("SELECT id,username,email,password FROM adminler WHERE email=?");
            $stmt->bind_param('s', $email);
            $stmt->execute();
            $res = $stmt->get_result();
            if ($row = $res->fetch_assoc()) {
                if ($password === $row['password']) {
                    $_SESSION['admin'] = [
                        'id' => $row['id'],
                        'username' => $row['username'],
                        'email' => $row['email']
                    ];
                    header('Location: admin-panel.php');
                    exit;
                } else {
                    $error = 'Şifre yanlış!';
                }
            } else {
                $error = 'Admin bulunamadı!';
            }
            $stmt->close();
        }
    }
}
?>

<!doctype html>
<html lang="tr">
<head>
<meta charset="utf-8">
<title>Admin Girişi / Kayıt</title>
<style>
body {
    font-family: Arial, sans-serif;
    background: #f4f6f8;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
}
.box {
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 6px 18px rgba(0,0,0,0.08);
    width: 360px;
}
h2 {
    text-align: center;
    margin-top: 0;
}
input {
    width: 100%;
    padding: 10px;
    margin: 8px 0;
    border: 1px solid #ddd;
    border-radius: 4px;
}
button {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 4px;
    background: #007bff;
    color: #fff;
    font-weight: 600;
    cursor: pointer;
}
button.register {
    background: #28a745;
}
.msg {
    color: red;
    text-align: center;
    margin-bottom: 8px;
}
.success {
    color: green;
    text-align: center;
    margin-bottom: 8px;
}
.link {
    text-align: center;
    margin-top: 10px;
}
.link a {
    color: #007bff;
    text-decoration: none;
}
.link a:hover {
    text-decoration: underline;
}
</style>
</head>
<body>
<div class="box">
    <h2><?= $showRegister ? 'Admin Kayıt' : 'Admin Giriş' ?></h2>

    <?php if($error): ?>
        <div class="msg"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>

    <?php if($success): ?>
        <div class="success"><?= htmlspecialchars($success) ?></div>
    <?php endif; ?>

    <?php if($showRegister): ?>
        <form method="post">
            <input type="text" name="username" placeholder="İsminiz" required value="<?= htmlspecialchars($username) ?>">
            <input type="text" name="email" placeholder="E-posta (örn: emir → otomatik @admin.com)" required value="<?= htmlspecialchars($email) ?>">
            <input type="password" name="password" placeholder="Şifre (en az 1 _ karakteri)" required>
            <button type="submit" name="register" class="register">Kayıt Ol</button>
        </form>
        <div class="link"><a href="../login.php">Giriş Sayfasına Dön</a></div>

    <?php else: ?>
        <form method="post">
            <input type="email" name="email" placeholder="E-posta" required value="<?= htmlspecialchars($email) ?>">
            <input type="password" name="password" placeholder="Şifre" required>
            <button type="submit" name="login">Giriş Yap</button>
        </form>
        <div class="link"><a href="?action=register">Admin Kayıt Ol</a></div>
        <div class="link"><a href="../login.php">Kullanıcı Girişine Dön</a></div>
    <?php endif; ?>

    <!-- 💡 Yeni eklenen kısım: admin login sayfası linki -->
    <div class="link" style="margin-top:15px;">
        <a href="http://localhost/futbol_haberleri/admin-panel/admin-login.php">Admin Girişi Sayfasına Git</a>
    </div>
</div>
</body>
</html>
