<?php

$numbers = [1, -4, 7, 12,];

function onlyPositive(array $input):int {
    function whichNum(int $number):bool{
    return $number > 0;
    }
     return array_sum(array_filter($input,'whichNum'));
}


var_dump(onlyPositive($numbers));