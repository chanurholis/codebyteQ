<?php

function FirstFactorial($num)
{
    $result = 1;
    for ($i = 1; $i <= $num; $i++) {
        $result *= $i;
    }    
    return $result;
}

FirstFactorial(8);
