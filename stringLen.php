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



echo stringLen('hello world');