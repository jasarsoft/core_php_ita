<?php
  $a = 5;
  $b = 8;
  for($i = 0; $i < $a; $i++)
  {        
    echo $i;  
    for($u = 1; $u <= $b; $u ++)
        {
            if($u == $b || $i == 0 || $i == $a-1)   
                echo $u;
            else
                echo "0";
        }
        echo "<br>";
  }
?>