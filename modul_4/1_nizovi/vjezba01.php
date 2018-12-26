<?php
$arr = array( 2, 5, 1, 7, 4, 3, 8 );
for( $i = 0; $i < sizeof( $arr ); $i++ )
{
    $min = $i;
    for( $u = $i; $u < sizeof( $arr ); $u++ )
        {
            if( $arr[ $u ] < $arr[ $min ] )
                   $min = $u;
        }   
        $tmp = $arr[ $i ];
        $arr[ $i ] = $arr[ $min ];
        $arr[ $min ] = $tmp;
}
print_r( $arr ); 
?>