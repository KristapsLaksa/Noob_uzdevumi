<?php
$names = ["john", "JACOB", "jinGleHeimer", "schmidt"];


function capitalizeNames(array $input):array {
    function capitalize(string $name):string{
        return ucfirst(strtolower($name));
    }
    return array_map('capitalize',$input);
}

var_dump(capitalizeNames($names));