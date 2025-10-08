<?php
session_start();
require 'db.php';

if(isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if($row = $result->fetch_assoc()){
        if(password_verify($password, $row['password'])){
            $_SESSION['kullanici'] = $row['username'];
            $_SESSION['user_id'] = $row['id'];  // bu çok önemli!
            header("Location: index.php"); // forum sayfası
            exit;
        } else {
            echo "Şifre yanlış";
        }
    } else {
        echo "Kullanıcı bulunamadı";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Giriş Yap</title>
    <style>
        body { font-family: Arial; display:flex; justify-content:center; align-items:center; height:100vh; background:#f4f4f4; }
        form { background:#fff; padding:30px; border-radius:8px; box-shadow:0 0 10px rgba(0,0,0,0.2); width:300px; }
        input { width:100%; padding:10px; margin:10px 0; }
        button { width:100%; padding:10px; background:#28a745; color:#fff; border:none; cursor:pointer; }
        .message { color:red; margin-bottom:10px; }
    </style>
</head>
<body>
    <form method="POST" action="">
        <h2>Giriş Yap</h2>
        <?php if(isset($error)) echo "<div class='message'>$error</div>"; ?>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Şifre" required>
        <button type="submit" name="login">Giriş Yap</button>
        <p style="text-align:center;margin-top:10px;">Üye değil misiniz? <a href="register.php">Kayıt Ol</a></p>
    </form>
</body>
</html>
