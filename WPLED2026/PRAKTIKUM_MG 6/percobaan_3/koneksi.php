s<?php
    $host     = "localhost";
    $username = "root";
    $password = "";
    $database = "db_login";

    $conn= mysqli_connect($host, $username, $password, $database);

    if (!$conn) {
        die("Koneksi GAGAL: " . mysqli_connect_error());
    }
?>