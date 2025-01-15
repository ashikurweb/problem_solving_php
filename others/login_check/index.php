<?php 

$username = 'admin';
$password = "1234";

if ( $username == 'admin' && $password == '1234' ) {
    $result = 'Welcome, Admin';
} else if ( $username == 'admin' ) {
    $result = 'Incorrect Password!';
} else {
    $result = 'Invalid Credientails';
}

echo $result;