<?php
$lastStatus = 2;
$status = 4;
$statusName = "unknown";
  
if($status == 1)
        $statusName = "stays";
else if($status == 2)
        $statusName = "moves";
else if($status == 3)
        $statusName = "dissapear";
else if($status == 4)
        {
        if($lastStatus == 2)
        $statusName = "dissapear";
        else
        $statusName = "unknown";
        }
echo $statusName;