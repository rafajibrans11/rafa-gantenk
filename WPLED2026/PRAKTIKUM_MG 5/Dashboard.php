<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: FORM LOGIN.html");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="loginapp.css">
</head>
<body>
    <div class="container">
        <h2>Selamat datang, <?php echo $_SESSION['user']; ?>!</h2>
        <p>Anda berhasil login dan data ditemukan di tabel users.</p>
        <a href="login.html">Logout</a>
    </div>
</body>
</html>
