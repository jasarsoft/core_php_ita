<?php
$page = "index";
  if( $page == "index" ){
    $page = "index.html";
  }elseif( $page == "products" ){
    $page = "products.html";
  }else{
    $page = "login.html";
  }
echo $page;
?>