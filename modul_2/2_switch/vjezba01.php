<?php
  define( "MONDAY", 1 );
  define( "TUESDAY", 2 );
  define( "WEDNESDAY", 3 );
  define( "THURSDAY", 4 );
  define( "FRIDAY", 5 );
  
  $day = MONDAY;
  
  switch( $day ){
    case MONDAY:
        $description = "First day of week";
        break;
    case TUESDAY:
        $description = "Second day of week";
        break;
    case WEDNESDAY:
        $description = "Third day of week";
        break;
    case THURSDAY:
        $description = "Forth day of week";
        break;
    case FRIDAY:
        $description = "Fifth day of week";
        break;
    default:
        $description = "no description";
    break;                               
  }
  
echo $description; 
?>