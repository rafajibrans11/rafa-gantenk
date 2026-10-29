<?php
    include 'koneksi.php';
    global $conn;
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (username, password)
            VALUES ('$username', '$password')";

    if (mysqli_query($conn, $sql)) {
        echo "Data user berhasil di simpan";
    } else {
        echo "Data gagal disimpan : " . mysqli_error($conn);
    }
?>