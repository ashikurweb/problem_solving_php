<?php 

function checkNumber ( $n ) {
    return $n == 0 ? 'Zero' : ( $n > 0 ? 'Positive' : 'Negative');
}
// $check = checkNumber(8); return Positive
// $check = checkNumber(-8); return Negative
$check = checkNumber(0);
echo $check;