<?php 

// $marks = 80;


// if ( $marks >= 80 ) {
//     $result = 'A+';
// } else if ( $marks >= 70 ) {
//     $result = 'A';
// } else if ( $marks >= 60 ) {
//     $result = 'A-';
// } else if ( $marks >= 50 ) {
//     $result = 'B';
// } else if ( $marks >= 40 ) {
//     $result = 'C';
// } else {
//     $result = "Fail";
// }

// echo $result;


//  Using Switch

$marks = 60;

switch( $marks ) {
    case '80':
        $result = 'A+';
    break;

    case '70':
        $result = 'A';
    break;

    case '60':
        $result = 'A-';
    break;

    case '50':
        $result = 'B';
    break;

    case '40':
        $result = 'C';
    break;

    default:
        $result = 'Fail';
}

echo $result;



