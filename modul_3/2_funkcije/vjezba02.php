<?php
define("SQUARE", 0);
define("RECTANGLE", 1);   
define("CIRCLE", 2);   
define("PI", 3.14); 
function area($type, $a, $b = 0){
    $rez = 0;
    switch($type)
        {
            case SQUARE:
                $rez = pow($a, 2);
                break;
            case RECTANGLE:
                $rez = $a * $b;
                break;
            case CIRCLE:
                $rez = pow($a, 2) * PI;
                break;
        }
    return $rez;
}
echo area(CIRCLE, 4);
?>