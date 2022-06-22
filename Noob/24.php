<?php


function countLetters(string $word):string{
    $splitWord=str_split($word,1);
    $duplicate = array_count_values($splitWord);
    return implode(array_map(function ($value,$key){
        return "$key:$value ";
    },$duplicate,array_keys($duplicate)));
}

echo countLetters('abbcccddddeeeee').PHP_EOL;