<?php

$odd_even = fn($num) =>  $num % 2 ===0;

// echo $odd_even(40);

if($odd_even(40)){
    echo "yes divisible by 2" ;
}

else{
    echo "not divisible";
}