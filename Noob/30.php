<?php


$input = 10;


function populateMonkeys(int $inputValue):array{
    return  range(1,$inputValue );
}


var_dump(populateMonkeys($input));

