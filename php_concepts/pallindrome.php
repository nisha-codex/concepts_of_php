<?php

$numbers = [1, 11, 121, 1321, 45, 567, 78];
// $palindrome = 0;
// $not_palindrome = 0;
function check_palindrome($num)
{
    global $palindrome ,$not_palindrome ;
    $original = $num;
    $reverse = 0;

    while ($num > 0) {
        $digit = $num % 10;
        $reverse = ($reverse * 10) + $digit;
        $num = intdiv($num, 10);
    }

    if ($reverse == $original) {
        $palindrome++;
    } else {
        $not_palindrome++;
    }
}

foreach ($numbers as $num) {
check_palindrome($num);
}

echo "Palindrome numbers: $palindrome\n";
echo "Not Palindrome numbers: $not_palindrome\n";


$result = [
        "Palindrome" => $palindrome,
        "Not Palindrome" => $not_palindrome
    ];

print_r($result);