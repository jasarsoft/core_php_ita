<?php
$numElements = 20;
$rowEl = 10;

for($i=0;$i<$numElements;$i++)
    {
        if($i%$rowEl==0 && $i>0)
            echo "<br/>";
            echo "X";  
    }
?>