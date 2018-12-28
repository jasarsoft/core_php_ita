<?php
$username = "John";
$password = "456";
$conn = mysqli_connect("localhost", "root", "");
mysqli_select_db($conn,"test_db");

$r = mysqli_query($conn,"SELECT * FROM users WHERE username = '$username' AND password = '$password'");
if(mysqli_num_rows($r) == 1)
    echo "valid";
else
    echo "invalid";
mysqli_close($conn);
?>