<?php

function FirstReverse($str)
{
    $strLength = strlen($str);
    $result = null;
    for ($i = ($strLength - 1); $i >= 0; $i--) {
        $result .= $str[$i];
    }
    return $result;
}

FirstReverse('coderbyte');
