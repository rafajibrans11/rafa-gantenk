
<html>
<head>
    <title>Hasil Login</title>
    <link rel="stylesheet" href="loginapp.css">
</head>
<body>
    <div class="login-card">
        <h2>Status Login</h2>
        <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $user = htmlspecialchars($_POST['username']);
                $pass = htmlspecialchars($_POST['password']);

                if ($user != "" && $pass != "") {
                    echo "<p style='color: green;'>Selamat datang, <strong>$user</strong>!</p>";
                } else {
                    echo "<p style='color: red;'>Gagal login. Form belum lengkap.</p>";
                }
            }
        ?>
        <br>
        <a href="formlogin.html">← Kembali</a>
    </div>
</body>
</html>

