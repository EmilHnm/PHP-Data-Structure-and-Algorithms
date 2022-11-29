<?php

function linearSearch($arr, $x)
{
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] === $x) {
            return $i;
        }
        return -1;
    }
}

function binarySearch($ar, $x, $start, $end)
{
    if ($start > $end) {
        return -1;
    }
    $mid = ($start + $end) / 2;
    if ($mid === $x) return $mid;
    if ($x < $ar[$mid]) binarySearch($ar, $x, $start, $mid - 1);
    else binarySearch($ar, $x,  $mid + 1, $end);
}
