<?php 
$conn = mysqli_connect( "localhost", "root", "" );
mysqli_query( $conn, "CREATE DATABASE test_db" );
mysqli_select_db( $conn, "test_db" );
mysqli_query($conn, "CREATE TABLE users (userid int primary key auto_increment, username varchar(256), password varchar(256))");
mysqli_close( $conn );
?>