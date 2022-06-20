<?php

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, -11, -12, -13, -14, -15];
$empty = [];

function sumCount(array $input):array
{  $result = [];
    if(count($input) >0){
    $neg = array_sum(array_filter($input, function ($x) {
        return $x < 0;
    }));
    $poz = count(array_filter($input, function ($x) {
        return $x > 0;
    }));

    array_push($result, $poz, $neg);
    }
    return $result;

}
var_dump(sumCount($numbers));
var_dump(sumCount($empty));