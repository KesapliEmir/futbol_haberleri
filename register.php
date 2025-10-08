<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require 'db.php';  // bu satır yoksa tabloya bağlanamaz

if (isset($_POST['register'])) {
    $username = trim($_POST['username']);
    $email    = trim($_POST['email']);
    $password = trim($_POST['password']);
    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    // Email kontrolü
    $check = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $check->bind_param("s", $email);
    $check->execute();
    $result = $check->get_result();

    if ($result->num_rows > 0) {
        $error = "Bu email zaten kayıtlı!";
    } else {
        $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $email, $password_hash);

        if ($stmt->execute()) {
            $success = "Kayıt başarılı! Giriş yapabilirsiniz.";
        } else {
            $error = "Kayıt sırasında hata oluştu!";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Kayıt Ol</title>
    <style>
        body { font-family: Arial; display:flex; justify-content:center; align-items:center; height:100vh; background:#f4f4f4; }
        form { background:#fff; padding:30px; border-radius:8px; box-shadow:0 0 10px rgba(0,0,0,0.2); width:300px; }
        input { width:100%; padding:10px; margin:10px 0; }
        button { width:100%; padding:10px; background:#007BFF; color:#fff; border:none; cursor:pointer; }
        .message { color:red; margin-bottom:10px; }
        .success { color:green; margin-bottom:10px; }
    </style>
</head>
<body>
    <form method="POST" action="">
        <h2>Kayıt Ol</h2>
        <?php if(isset($error)) echo "<div class='message'>$error</div>"; ?>
        <?php if(isset($success)) echo "<div class='success'>$success</div>"; ?>
        <input type="text" name="username" placeholder="Kullanıcı Adı" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Şifre" required>
        <button type="submit" name="register">Kayıt Ol</button>
        <p style="text-align:center;margin-top:10px;">Zaten üye misiniz? <a href="login.php">Giriş Yap</a></p>
    </form>
</body>
</html>
