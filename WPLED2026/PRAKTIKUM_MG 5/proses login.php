<?php
include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username = '$username' AND PASSWORD='$password'";
$result = mysqli_query($koneksi, $sql);

if (mysqli_num_rows($result) > 0) {
    session_start();
    $data = mysqli_fetch_assoc($result);
    $_SESSION['user'] = $data['username'];
    header("Location: Dashboard.php");
} else {
    echo "<!DOCTYPE html>
<html>
<head>
    <title>Login Gagal</title>
    <link rel='stylesheet'>
</head>
<body>
    <div class='error'>
        Username atau password salah! <br>
        <a href='login.php'>Coba lagi</a>
    </div>
</body>
</html>";
}
?>