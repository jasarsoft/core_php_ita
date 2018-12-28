<?php
$conn = mysqli_connect("localhost", "root", "");
mysqli_select_db($conn,"test_db");
$users = array(array("Peter", "123"), array("John", "456"), array("Thomas", "789"));
foreach($users as $user){
	mysqli_query($conn,"INSERT INTO users (username, password) VALUES ('{$user[0]}', '{$user[1]}')");
}
mysqli_close($conn);
?>