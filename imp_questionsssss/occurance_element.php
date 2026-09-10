<?php

$numbers = [4, 7, 8, 5, 5, 7, 8, 0, 0, 1, 0];
$count=0;
$visited = [];


for($i = 0 ; $i<count($numbers); $i++){
   
    if (in_array($numbers[$i], $visited)) {
        continue;
    }

    $count = 0;

    for($j = 0 ; $j<count($numbers); $j++){
        if($numbers[$i] == $numbers[$j]){
            $count++;
        }   
    }
    echo "occurance of $numbers[$i] => $count \n";
    
    
    // mark element as visited
    $visited[] = $numbers[$i];
}
