<?php

$numbers=[2, 5, 100];

function stringItUp(array $input):array{
   function intToString(int $number):string{
       return strval($number);
   }
   return array_map('intToString',$input);
}

var_dump(stringItUp($numbers));