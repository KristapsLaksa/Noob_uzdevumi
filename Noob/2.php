<?php

$numbers=[2, 5, 100];


function doubleNumbers(array $input):array{
    function double(int $number):int{
        return $number * 2 ;
    }
    return array_map('double',$input);
}

var_dump(doubleNumbers($numbers));