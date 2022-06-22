<?php

function shiftLetters(string $letters):string{
    $splitLetters=str_split($letters,1);
    return implode('',array_map(function($i){
        return chr(ord($i)+1);
    },$splitLetters));
}

echo shiftLetters('hello').PHP_EOL;
echo shiftLetters('abcxyz').PHP_EOL;


