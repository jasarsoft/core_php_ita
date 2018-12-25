<?php
$price = 999;

do{
  echo "Current price: " . $price . " Still not for sale. </br>";
  $price = $price + 1;
}while($price <= 1000);

echo "Current price: " . $price . " YOU CAN START WITH SALE !";           
?>