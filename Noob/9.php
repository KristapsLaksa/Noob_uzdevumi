<?php

$numbers = [1, 2, 2];

function squareSum(array $input):int{
    function inPow(int $num):int{
        return pow($num,2);
    }
    $powerArray =  array_map('inPow',$input);
    return array_sum($powerArray);
}

var_dump(squareSum($numbers));