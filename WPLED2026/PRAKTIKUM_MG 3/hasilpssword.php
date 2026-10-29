 <?php

echo "Username = $_POST[username] <br>";

echo "Password = $_POST[password] <br>";
$passwordenkrip = md5($_POST['password']);
$passwordbenar = "5b871d694ec53462b5a645f793e22e40";
if ($passwordbenar==$passwordenkrip)
echo "PASSWORD ANDA BENAR";
else
    echo "PASSWORD ANDA SALAH";

?>