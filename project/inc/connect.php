<?php

$server = 'localhost';
$user = 'root';
$pass = 'root';
$base = 'phonebook';

$conn = mysqli_connect($server, $user, $pass, $base);

if (!$conn) {
    die('Connection failed: ' . mysql_connect_error());
}

?>