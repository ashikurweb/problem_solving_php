<?php 

$current_file_path = __FILE__ ;

if (file_exists( $current_file_path )) {
    $last_modified_file = filemtime( $current_file_path );
    echo "Last Modified " . date('l, dS F, Y, h:ia', $last_modified_file);
} else {
    echo 'File Not Found!';
}