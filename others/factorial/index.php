<?php 

function factorial ( $n ) {
    return $n <= 1 ? 1 : $n * factorial( $n - 1 );
}

$fact = factorial( 5 );
echo "5 Factorial is: {$fact}";