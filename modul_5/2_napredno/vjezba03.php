<?php
$string = "http://myDomain/home/index.php?id=25&cat=18&user=34";
$pars = preg_replace("/http:\/\//","",$string);
$pars = preg_replace("/\?[a-zA-Z0-9=&]+/","",$pars);
print_r($pars);
?>