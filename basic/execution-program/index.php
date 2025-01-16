<?php 

$currentTime = date('h:i:s');
echo $currentTime . '<br>';

sleep(5);

$sleepForCurrentTime = date('h:i:s');
echo $sleepForCurrentTime;

