<?php

function countBits($n) 
{
    $n = decbin($n); //transform decimal input in binary 4 => 100
    $string = strval($n); //transform int to string
    $each_num = str_split($string); //split the string into single characters
    $sum = 0; //initialize variable $sum

    //sum every character transforming them to int
    foreach ($each_num as $num) {
        $sum += (int) $num;
    }

    return $sum;
}

// return substr_count(decbin($n), 1);

