<?php

// $name = "Ruhi";
// find the number of vowels and consonants and return the answer like:- 
// Array ( [vowels] => 2, [consonants] => 2)

//    --------------------  METHOD 1 ---------------------

// $name = "nisha kumari";

echo "enter the string:";
$name = strtolower(readline());
$consonants = 0;
$vowels = 0;

for( $i = 0 ; $i<strlen($name) ; $i++){
    if (str_contains(strtolower($name[$i]) ,"a")){
        $vowels++;
    }

    elseif (str_contains(strtolower($name[$i]) ,"e")){
        $vowels++;
    }

    elseif (str_contains(strtolower($name[$i]) ,"i")){
        $vowels++;
    }

    elseif (str_contains(strtolower($name[$i]) ,"o")){
        $vowels++;
    }
    elseif (str_contains(strtolower($name[$i]) ,"u")){
        $vowels++;
    }

    // else{
    //     $consonants++;
    // }

    elseif($name[$i]!=" "){
         $consonants++;
    }
}

$result = [
    "vowels" => $vowels,
    "consonants" => $consonants
];

print_r($result);





// -------------------------- METHOD 2 ---------------------

//  .......... strpos returns the index of that particuar character if its present
// strpos("aeiou", "a")  // 0
// strpos("aeiou", "e")  // 1
// strpos("aeiou", "i")  // 2

$name = "nisha kumari";
$consonants = 0;
$vowels = 0;

for( $i = 0 ; $i<strlen($name) ; $i++){
    if (strpos("aeiou", strtolower($name[$i])) !== false) {
        $vowels++;
    }

    elseif($name[$i]!=" "){
         $consonants++;
    }
    // else{
    //     $consonants++;
    // }
}

$result = [
    "vowels" => $vowels,
    "consonants" => $consonants
];

print_r($result);

