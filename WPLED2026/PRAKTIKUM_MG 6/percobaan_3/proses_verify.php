<?php
    include 'koneksi.php';
    global $conn;

    $username = $_POST['username'];
    $password_input = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_assoc($result);
        $hash_database = $data['PASSWORD'];

        if (password_verify($password_input, $hash_database)) {
            echo "Halo " . $username;
        } else {
            echo "Username atau password salah!";
        }
    } else {
        echo "Username atau password salah!";
    }
?>