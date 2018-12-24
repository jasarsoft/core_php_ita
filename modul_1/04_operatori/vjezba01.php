<?php  
$price = 527.356;
$discount = 15;
$pricewithdiscount = $price - (($discount/100)*$price);
echo number_format($pricewithdiscount,2) 
?>