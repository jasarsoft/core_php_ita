<?php
$operator = "-";
$operand1 = 2;
$operand2 = 3;

switch($operator)
        {
            case "+":
                $result = $operand1 + $operand2;
                break;
            case "-":
                $result = $operand1 - $operand2;
                break;
            case "*":
                $result = $operand1 * $operand2;
                break; 
            case "/":
                $result = $operand1 / $operand2; 
                break; 
			default:
				$result = "Unknown result.";
        }   
echo $result;
?>