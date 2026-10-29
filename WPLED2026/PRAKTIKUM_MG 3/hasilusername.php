 <?php

echo "Username = $_POST[username] <br>";
$usernameenkrip = md5($_POST['username']);
$usernamebenar = "59a2da5d4167a0ea8d6fec4199dfee5c";
if ($usernamebenar==$usernameenkrip)
echo "USERNAME ANDA BENAR";
else
    echo "USERNAME ANDA SALAH";

echo "Password = $_POST[password] <br>";


?>