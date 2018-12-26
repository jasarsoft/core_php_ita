<?php
$lipsum = "Lorem Ipsum is simply dummy text of the printing and typesetting industry.";
$izlaz = (strlen( $lipsum ) > 15) ?substr( $lipsum, 0, 12 )."...": $lipsum;
echo $izlaz;
?>