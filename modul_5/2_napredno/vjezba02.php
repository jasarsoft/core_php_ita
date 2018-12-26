<?php
$string = "http://myPage.php?id=25&cat=18&user=34";
$pars = explode("?",$string);
$pars = explode("&",$pars[1]);
$parsedPars=array();
for($i=0;$i<sizeof($pars);$i++)
    {

        $currentParam = explode("=",$pars[$i]);
        $parsedPars[$currentParam[0]] = $currentParam[1];
    }
print_r($parsedPars);
?>