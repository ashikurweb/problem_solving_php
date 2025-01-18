<?php 

function armStrongNumber ( $num ) {
    $strNum = strlen( $num );

    $sum = 0;
    $num = (string)$num;

    for ( $i = 0; $i < $strNum; $i++ ) {
        $sum = $sum + pow((int)$num[$i], $strNum);
    }

    $result = ((string)$sum == (string)$num) ? 'True' : 'False';
    return $result;
}

$check1 = "153 ArmStrong Number is ? " . armStrongNumber(153);
echo $check1;
echo "<br>";
$check2 = "122 ArmStrong Number is ? " . armStrongNumber(122);
echo $check2;