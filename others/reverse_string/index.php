<?php 

function reverseString ( $str ) {
    $reverseStr = "";
    $length = strlen( $str );

    for ( $i = $length -1; $i >= 0; $i-- ) {
        $reverseStr .= $str[$i];
    }

    return $reverseStr;
}

$str = "Bangladesh";

echo reverseString( $str );