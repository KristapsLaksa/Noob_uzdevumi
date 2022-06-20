<?php

$celebrity = [
    [
      'name'=>"Angelina Jolie",
      'age'=> 80,
    ],
    [
        'name'=> "Eric Jones",
      'age'=> 2,
    ],
    [
        'name'=> "Paris Hilton",
      'age'=> 5,
    ],
    [
        'name'=> "Kayne West",
      'age'=> 16,
    ],
    [
        'name'=> "Bob Ziroll",
      'age'=> 100,
    ]
  ];

function readyToPutInTheDOM(array $input):array {
    function findName(array $i):string{
        return '<h1>'.$i['name'].'</h1>'.'<h2>'.$i['age'].'</h2>';
    } return array_map('findName',$input);

}

var_dump(readyToPutInTheDOM($celebrity));