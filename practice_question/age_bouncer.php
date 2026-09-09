<?php

echo " enter your age :";
$age = readline();

if($age >= 18){
    echo "permission granted ...";
}
else {
    $new_age= 18-$age;
    echo " access denied . please come after $new_age years ";
}