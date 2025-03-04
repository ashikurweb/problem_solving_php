<?php 

function findTrailingZeros ( $n ) {

    if ( $n == 0 ) {
        return -1;
    }

    $count = 0;

    for ( $i = 5; $n / $i >= 1; $i *= 5 ) {
        $count += $n / $i;
    }

    return $count;
}

$n = 100;

echo "Find Zeros in 100! is " . findTrailingZeros( $n );