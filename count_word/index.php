<?php

function countWord ( string $str ) : int
{
    $words = explode( ' ', $str );
    return count( $words );
}

$str = 'I am Ashikur Rahman';

echo countWord( $str );