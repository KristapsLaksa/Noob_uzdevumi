<?php

$numbers = [3, 6, 8, 2];

function evensOnly(array $input ):array {
    return array_values(array_filter($input,function($x){
        return $x % 2 == 0;
    }));
}

var_dump(evensOnly($numbers));
