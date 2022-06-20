<?php

$manyArrays= [
    ["1", "2", "3"],
    [true],
    [4, 5, 6]
];

function flatten(array $input):array {
    return  array_merge(...$input);
 }

var_dump(flatten($manyArrays));
