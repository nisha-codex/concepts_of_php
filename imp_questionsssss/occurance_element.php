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

//  ----------------------- method 2 (sir's method----------------------


    $numbers = [1,2,3,4,5,1,2,3,4,1,2,3,1,2,1];
    $array = [];
    
    //prince sir's method to solve the problem
    foreach($numbers as $num){
        if(array_key_exists($num,$array)){
           $array[$num]++;
        }
        else{
            $array[$num] = 1;
        }
    }

    print_r($array);