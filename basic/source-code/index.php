<?php 
$all_lines = file('https://ashikurweb.github.io/ashikurrahman');

foreach ( $all_lines as $line_num => $line ) {
    echo "Line No {$line_num}" . htmlspecialchars( $line ) . '\n';
}