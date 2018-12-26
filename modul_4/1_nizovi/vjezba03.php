<?php
$lipsum = "Lorem Ipsum is simply dummy text of the printing and 
typesetting industry. Lorem Ipsum has been the industry's standard 
dummy text ever since the 1500s, when an unknown printer took a 
galley of type and scrambled it to make a type specimen book. It has 
survived not only five centuries, but also the leap into electronic 
typesetting, remaining essentially unchanged. It was popularised in 
the 1960s with the release of Letraset sheets containing Lorem Ipsum 
passages, and more recently with desktop publishing software like 
Aldus PageMaker including versions of Lorem Ipsum.";

$arr = explode(" ", $lipsum);
$words = array();
$counts = array();
for($i=0; $i<sizeof($arr); $i++){
        if(!in_array($arr[$i], $words)){
                $words[] = $arr[ $i ];
                $counts[] = 1;
            }else{
                for($u=0; $u<sizeof($words); $u++){
                    if( $words[ $u ] == $arr[ $i ]){
                        $counts[ $u ]++;
					}
				}
            }
    }
for($i=0; $i<sizeof($words); $i++){
    echo($words[$i] . " : " . $counts[$i] . "<br>");
}
?>