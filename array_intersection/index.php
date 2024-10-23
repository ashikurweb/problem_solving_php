<?php 

function arrayIntesection ( $arr1, $arr2 ) {
    $intersection = [];

    foreach ( $arr1 as $element ) {
        if ( in_array( $element, $arr2 )) {
            $intersection[] = $element;
        }
    }

    return $intersection;
}

$arr1 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$arr2 = [3, 4, 5, 6, 10];

echo "<pre>"; 
var_dump(array_intersect( $arr1, $arr2 ));
echo "</pre>";