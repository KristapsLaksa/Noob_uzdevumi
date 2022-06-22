<?php

$voters = [
    [ 'name'=> "Bob", 'age'=> 30, 'voted'=> true ],
  [ 'name'=> "Jake", 'age'=> 32, 'voted'=> true ],
  [ 'name'=> "Kate", 'age'=> 25, 'voted'=> false ],
  [ 'name'=> "Sam", 'age'=> 20, 'voted'=> false ],
  [ 'name'=> "Phil", 'age'=> 21, 'voted'=> true ],
  [ 'name'=> "Ed", 'age'=> 55, 'voted'=> true ],
  [ 'name'=> "Tami", 'age'=> 54, 'voted'=> true ],
  [ 'name'=> "Mary", 'age'=> 31, 'voted'=> false ],
  [ 'name'=> "Becky", 'age'=> 43, 'voted'=> false ],
  [ 'name'=> "Joey", 'age'=> 41, 'voted'=> true ],
  [ 'name'=> "Jeff", 'age'=> 30, 'voted'=> true ],
  [ 'name'=> "Zack", 'age'=> 19, 'voted'=> false ],
];

function totalVotes(array $input):string{
    $youngVotesTrue = array_filter($input,function($item) {
            if ($item['age'] >= 18 & $item['age'] <= 25 && $item['voted']) {
                return $item;
            } return null;
        });

    $young = array_filter($input,function($item) {
            if ($item['age'] >= 18 & $item['age'] <= 25) {
                return $item;
            } return null;
        });

    $midVotesTrue = array_filter($input,function($item) {
            if ($item['age'] >= 26 & $item['age'] <= 35 && $item['voted']) {
                return $item;
            }return null;
        });

    $mid = array_filter($input,function($item) {
            if ($item['age'] >= 26 & $item['age'] <= 35) {
                return $item;
            }return null;
        });

    $oldVotesTrue = array_filter($input,function($item) {
            if ($item['age'] >= 36 && $item['voted']) {
                return $item;
            }return null;
        });

    $old = array_filter($input,function($item) {
            if ($item['age'] >= 36) {
                return $item;
            }return null;
        });

    return
        'young votes: '.count($youngVotesTrue)
        .PHP_EOL.
        'young people: '.count($young)
        .PHP_EOL.
        'mid votes: '.count($midVotesTrue)
        .PHP_EOL.
        'mid people: '.count($mid)
        .PHP_EOL.
        'old votes: '.count($oldVotesTrue)
        .PHP_EOL.
        'old people: '.count($old)
        .PHP_EOL;
    }



echo totalVotes($voters);