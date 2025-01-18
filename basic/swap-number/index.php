<?php 

function swapNumbersUsingThirdVariable ( $num1, $num2 ) {
    $result = '';
    $result .= "Before swapping: num1 = $num1, num2 = $num2 <br>";

    // Swap Logic
    $temp = $num1;
    $num1 = $num2;
    $num2 = $temp;

    $result .= "Swap Number num1 = $num1, num2 = $num2";
    return $result;
}

$show = swapNumbersUsingThirdVariable(10, 20);
echo $show;