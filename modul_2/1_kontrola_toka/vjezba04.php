<?php
$chairs = 10;
if ( $chairs < 10)
{
$discount = 0;
}
elseif ( $chairs >= 10 && $chairs <= 49 )
{
$discount = 5;
}
elseif ( $chairs >= 50 && $chairs <= 99 )
{
$discount = 10;
}
elseif ( $chairs >= 100 )
{
$discount = 15;
}
echo $discount;