<?php 

function palindromeChek ( $str ) 
{
    $reverse_string = strrev( $str );
    return $reverse_string === $str;
}

$str = 'madam';

$result = palindromeChek( $str ) ? 'Palindrome' : 'Not Palindrome';

echo $result;

