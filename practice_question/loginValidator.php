<?php

$stored_username = "nisha";
$stored_password = "nis017";

echo "enter your username: ";
$input_user = readline();

echo "enter your password: ";
$input_pass = readline();

if($stored_username == $input_user && $stored_password == $input_pass){
    echo "Login successful";
}

else if($stored_username == $input_user && $stored_password != $input_pass ) {
    echo "!! Incorrect password !!";
}

else if($stored_username != $input_user && $stored_password == $input_pass ) {
    echo "invalid username"; 
}