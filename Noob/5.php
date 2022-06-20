<?php

$persons = [
    [
        'name'=>"Angelina Jolie",
      'age'=> 80,
    ],
    [
        'name'=>"Eric Jones",
        'age'=> 2,
    ],
    [
        'name'=>"Paris Hilton",
        'age'=>5,
    ],
    [
        'name'=>"Kayne West",
        'age'=>16,
    ],
    [
        'name'=>"Bob Ziroll",
        'age'=>100,
    ]

];

function namesOnly(array $input):array {
 function findName(array $i):string{
     return $i['name'];
 } return array_map('findName',$input);

}

var_dump(namesOnly($persons));
