<?php 

/**
 * Fibonacci Number 
 */ 

function fibonacci ( $n ) {
    if ( $n == 0 ) {
        return 0;
    } elseif ( $n == 1 ) {
        return 1;
    } else {
        return fibonacci( $n - 1 ) + fibonacci( $n - 2 );
    }

}

$fibo = fibonacci( 10 );
echo "Fibonacci Sum : " . $fibo . '<br>';

$n = 10;

for ( $i = 0; $i < $n; $i++ ) {
    echo fibonacci($i) . "<br>" ;
}