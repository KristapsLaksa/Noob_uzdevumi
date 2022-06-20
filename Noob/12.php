<?php

$input = 348597;


$numbersToReverse = str_split($input,$length = 1);
$reversed = array_reverse($numbersToReverse);

echo implode(' ',$reversed)."\n";


