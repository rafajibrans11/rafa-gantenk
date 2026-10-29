<?php

echo "Username = $_POST[username] <br>";
$usernameenkrip = md5($_POST['username']);
echo "username enkrip= $usernameenkrip";

echo "Password = $_POST[password] <br>";


?>