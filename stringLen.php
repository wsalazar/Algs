<?php

function stringLen($string)
{
    $cnt = 0;
    while($string != ''){
        $string = substr($string, 1);
        $cnt++;
    }
    return $cnt;
}
$start = microtime(true);
echo stringLen('Alexander Sapountzis');
$time = microtime(true) - $start;
echo 'This is how long it takes ' . $time . '<br />';