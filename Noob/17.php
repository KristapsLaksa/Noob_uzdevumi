<?php

$names = ["dog", "wolf", "by", "family", "eaten", "camping"];

function fiveCharactersOrFewerOnly(array $input):array {
    uasort($input,function($b, $a){
    return strlen($b) - strlen($a);
});
    return array_values(array_filter($input,function($x){
        return strlen($x) <= 5;
    }));
}

var_dump(fiveCharactersOrFewerOnly($names));