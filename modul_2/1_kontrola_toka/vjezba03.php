<?php
$secretNumber = 765;
if ($_GET['number'] == $secretNumber )
	{
		echo ' <p> Congratulations!!! </p> ';
	}
elseif( abs($_GET['number'] - $secretNumber) < 10 )
	{
		echo ' <p> You are near to the result!!! </p> ';
	}
else
	{
		echo ' <p> Try again!!!  </p> ';
	}