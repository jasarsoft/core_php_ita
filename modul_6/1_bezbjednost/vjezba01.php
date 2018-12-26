<?php
$allPages = array("allUsers.php","anyOtherPage.php");
$page = "allUsers.php";
if(in_array($page,$allPages))
        include $page;   
    else
        echo "unknown page";
?>