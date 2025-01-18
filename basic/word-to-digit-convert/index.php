<?php 

function wordToDigitConvert ( $word ) {
    $word = explode(";", $word);

    $result = '';

    foreach ( $word as $value ) {
        $formattedValue = strtolower(trim( $value ));
        switch( $formattedValue ) {
            case 'zero' :
            $result .= '0';
                break;
            
            case 'one' : 
            $result .= '1';
                break;
            
            case 'two' :
            $result .= '2';
                break;
            
            case 'three' : 
            $result .= '3';
                break;
            
            case 'four' : 
            $result .= '4';
                break;

            case 'five' : 
            $result .= '5';
                break;
            
            case 'Six' : 
            $result .= '6';
                break;
            
            case 'Seven' :
            $result .= '7';
                break;

            case 'Eight' :
            $result .= '8';
                break;

            case 'nine' :
            $result .= '9';
                break;
        }
    }

    return $result;
}

$result = wordToDigitConvert('One;TWO;THREE');
echo $result;