<?php
 
    $amount = 0;
    $number = 0;
     
    do
    {
        $number ++;
        echo $amount. " + ". $number. " je jednako : ";
        $amount = $amount + $number;
        echo $amount. "<br />";
     
    }
     while ( $number!= 10 );
     
    echo "<br />";
    echo "Amount all numbers: ". $amount;
     
?>