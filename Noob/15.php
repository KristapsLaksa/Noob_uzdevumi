<?php

$numbers = [3, 6, 8, 2];

function fiveAndGreaterOnly(array $input):array {
    return array_values(array_filter($input,function($x){
       return $x >= 5;
    }
    ));
}

var_dump(fiveAndGreaterOnly($numbers));
var_dump($numbers);