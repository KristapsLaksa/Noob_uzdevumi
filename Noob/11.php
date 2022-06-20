<?php

$input = 5;


function populate(int $inputValue):array{
   return $toPopulate = range(0,$inputValue -1);
}


var_dump(populate($input));