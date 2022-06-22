<?php

function checkExam(array $a,array $b):int{
    $pointsPerCorrect = 4;
    $pointsPerWrong = -1;

    $wrongAnswers = array_diff_assoc($b,$a);
    $points = (count($a)-count($wrongAnswers))*$pointsPerCorrect;
    $points +=(count($wrongAnswers)-(count($b) - count(array_filter($b))))*$pointsPerWrong;

    return max($points,0);
}


echo checkExam(["a", "a", "b", "b"], ["a", "c", "b", "d"]).PHP_EOL;
echo checkExam(["a", "a", "c", "b"], ["a", "a", "b", ""]).PHP_EOL;
echo checkExam(["a", "a", "b", "c"], ["a", "a", "b", "c"]).PHP_EOL;
echo checkExam(["b", "c", "b", "a"], ["", "a", "a", "c"]).PHP_EOL;