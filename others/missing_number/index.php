<?php

/**
 * Array Missing Number
 * @param array $arr
 * @return int
 */ 

function missingNumber( $arr ) {
    $n = count( $arr ) + 1;

    $expected_sum = ( $n * ( $n + 1) / 2 ); 
    $actual_sum   = array_sum( $arr );

    return $expected_sum - $actual_sum;
}

$arr = [1, 2, 3, 5, 6];

echo missingNumber( $arr );


# What will be the output and why?

