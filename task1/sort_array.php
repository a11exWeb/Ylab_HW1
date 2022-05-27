<?php

function cmp($a, $b)
{
    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? -1 : 1;
}

function getItemsList($array)
{
    $temp = [];
    foreach ($array as $sklad) {
        foreach ($sklad as $category) {
            $temp = array_merge($temp,$category);
        }
    }
    return $temp;
}

function rotateArray($array)
{
    $newArray = [];
    foreach ($array as $k => $v) {
        $newArray[$v['PRICE']] = array($k, $v['NAME']);
    }
    return $newArray ;
}

function getSortedProducts($array){
    $temp = [];
    $temp = getItemsList($array);
    $newArray = rotateArray($temp);
    krsort($newArray);
    return $newArray;
}

