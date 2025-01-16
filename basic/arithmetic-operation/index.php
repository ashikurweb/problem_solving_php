<?php 

function incrementString ( $starting, $iteration ) {
    $result = '';
    $currentString = $starting;
    for($i = 0; $i < $iteration; $i++) {
        $result .= ++$currentString . '<br>';
    }

    return $result;
}

$show = incrementString('A00', 10);

echo $show;