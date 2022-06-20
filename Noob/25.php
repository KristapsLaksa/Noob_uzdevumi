<?php

function find($string, $target):bool {
    $newString = str_split($string,1);
    return in_array($target,$newString);
};

var_dump(find("abcd", "b"));
var_dump(find("efghi", "a"));