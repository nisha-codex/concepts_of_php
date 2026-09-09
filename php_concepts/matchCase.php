<?php

$age = 22;
$status = match (true) {
    $age < 13 => 'Child',
    $age < 20 => 'Teenager',
    $age >= 18 => 'Adult',
    default => 'Unknown age',
};

echo $status;