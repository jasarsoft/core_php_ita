<?php
    if(!isset($_SESSION))
        session_start();
         
    if(!isset($_SESSION['ua']))
        die("Invalid user");
    
    $currentUserAgent = $_SERVER['HTTP_USER_AGENT'];
    $sessionUserAgent = $_SESSION['ua'];
    
    if($sessionUserAgent != $currentUserAgent)
        die("Invalid user");
    echo "valid user";
    session_regenerate_id(true);  
?>