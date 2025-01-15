<?php

$number = 15;

$result =  $number % 2 == 0  ? 'Even' : 'Odd';

echo $result;


// Another Way 

$number = 10;

if ( $number % 2 == 0 ) {
    $result = 'Even';
} else {
    $result = 'Odd';
}

echo $result;