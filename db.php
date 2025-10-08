<?php
$servername = "localhost"; 
$username   = "root";      // kendi MySQL kullanıcı adını yaz
$password   = "";          // kendi MySQL şifreni yaz
$dbname     = "futbol_haberleri";

// Bağlantı
$conn = new mysqli($servername, $username, $password, $dbname);

// Hata kontrol
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}
?>
