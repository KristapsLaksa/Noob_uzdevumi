<?php


$numbers = [4, 3, 9, 7, 2, 1];

function arrayPower(array $input):array{
    function sqRoot(int $value):int{
        if(ctype_digit(strval(sqrt($value)))){
            return sqrt($value);
        } else {
            return pow($value,2);
        }
    }
    return array_map('sqRoot',$input);
}


echo implode(' ',arrayPower($numbers))."\n";
//var_dump(arrayPower($numbers));
