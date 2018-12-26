<?php
$arr = array(0, 1, 2, 3, 4, 5, 6, 7, 8);
for($i=0; $i<sizeof($arr); $i++){
        if($i>0){
            echo $arr[$i] * $arr[$i-1]."<br>";
		}else{
			echo $arr[ $i ]."<br>";
		} 
    }
?>