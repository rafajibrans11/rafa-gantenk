 <?php

echo "Username = $_POST[username] <br>";
$usernameenkrip = md5($_POST['username']);
$usernamebenar = "59a2da5d4167a0ea8d6fec4199dfee5c";
if ($usernamebenar==$usernameenkrip)
echo "USERNAME ANDA BENAR";
else
    echo "USERNAME ANDA SALAH";



echo "Password = $_POST[password] <br>";
$passwordenkrip = md5($_POST['password']);
$passwordbenar = "5b871d694ec53462b5a645f793e22e40";
if ($passwordbenar==$passwordenkrip)
echo "PASSWORD ANDA BENAR";
else
    echo "PASSWORD ANDA SALAH";

?>