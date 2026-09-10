<?php

$numbers = [4, 7, 8, 5, 5, 7, 8, 0, 0, 1, 0];
$count=0;
$visited = [];

for($i = 0 ; $i<count($numbers); $i++){
    // array_push($visited, $numbers[$i]);
    for($j = 0 ; $j<count($numbers); $j++){
        if($numbers[$i] == $numbers[$j]){
            $count++;
        }   
    }
    echo "$numbers[$i] => $count \n";
    $count = 0;
}