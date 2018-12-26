<?php
$string = "myMail@mail.ml";
$pattern = "/^[a-zA-Z0-9]+\@[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/";
echo preg_match($pattern,$string);
?>