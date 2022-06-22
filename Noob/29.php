<?php





function warnTheSheep(array $sheep):string{
    $newSheep = array_reverse($sheep);
if($newSheep[0]=='wolf'){
    return 'Pls go away and stop eating my sheep'.PHP_EOL;
}else{
    $where = array_search('wolf',$newSheep) +1 ;
    return  'Oi! Sheep number '.($where-1).'! You are about to be eaten by a wolf!'.PHP_EOL;
}}

echo warnTheSheep(["sheep", "sheep", "sheep", "wolf", "sheep"]).PHP_EOL;
echo warnTheSheep(["sheep", "sheep", "wolf"]).PHP_EOL;
