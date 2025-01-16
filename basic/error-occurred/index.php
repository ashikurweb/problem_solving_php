<?php 
require '../functions.php';

echo $x;

echo 'Current script owner: ' . get_current_user() . "\n";  #Current User..

dd( error_get_last() );