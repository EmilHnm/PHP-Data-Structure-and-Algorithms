<?php

function arraySortedOrNot($ar)
{
    for ($i = 0; $i < count($ar) - 1; $i++) {
        if ($ar[$i] > $ar[$i + 1]) {
            return false;
        }
    }
    return true;
}

function quicksort($ar)
{
    if (count($ar) <= 1) {
        return $ar;
    }
    $pivot = $ar[count($ar) / 2];
    $left = [];
    $right = [];
    for ($i = 0; $i < count($ar); $i++) {
        if ($ar[$i] < $pivot) {
            array_unshift($left, $ar[$i]);
        }
        if ($ar[$i] > $pivot) {
            array_unshift($right, $ar[$i]);
        }
    }
    $left = quicksort($left);
    $right = quicksort($right);
    return array_merge($left, [$pivot], $right);
}

function bogoSort($ar)
{
    if (count($ar) <= 1) {
        return $ar;
    }
    if (arraySortedOrNot($ar)) {
        return $ar;
    }
    shuffle($ar);
    return bogoSort($ar);
}
$ar = [1, 4, 6, 7, 8, 2, 5, 11, 10];
$ar2 = [1, 4, 6, 7, 8, 2, 5, 11, 10];

$ar = quicksort($ar);
$ar2 = bogoSort($ar2);

var_dump($ar2);
