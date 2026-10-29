<?php

echo "Username = $_POST[username] <br>";


echo "Password = $_POST[password] <br>";
$passwordenkrip = md5($_POST['password']);
echo "password enkrip= $passwordenkrip"; 


?>