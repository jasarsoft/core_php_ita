<?php
$ctemp = -10;
while ($ctemp < 115) {
        print ("$ctemp degrees C converts to ");
        print (32 + $ctemp / 5 * 9  );
        print (" degrees F and to ");
        print ($ctemp + 273.1 );
        print (" degrees K<BR>");
        $ctemp = $ctemp + 20;
}
?>