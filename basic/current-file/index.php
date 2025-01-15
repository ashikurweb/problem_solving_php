<?php

function basepath() {
    $current_file_name = basename($_SERVER['PHP_SELF']);
    return $current_file_name;
}

function getCurrentURL() {
    // $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') ? "https://" : "http://";

    $host = $_SERVER['HTTP_HOST'];
    $uri = $_SERVER['REQUEST_URI'];

    $current_url = $host . $uri; // concat $protocal
    return $current_url;
}

$result = basepath();
$current_url = getCurrentURL();

echo "Current File Name: " . $result . "<br>";
echo "Current URL: " . $current_url;

?>
