<?php

// whole array cannot be printed using echo ........... we have to use print_r()

// one particular keys of an  array can be printed using echo    

// eg. echo $employee["emp_name"]


// ----------------------- indexed array 

$language = ["php", "python", "javaScript", "mySQL"];

print_r($language);
echo $language[0];
echo $language[3];
echo "\n";


//  ------------------------ associated array
$employee = [
    "emp_name" => "nisha" ,
    "emp_id" => 74 ,
    "salary " => 50000,
    "address" =>[ 
         "add" => "sarna toli behind ranchi college ",
         "house_no" => 42 ,
         "city" => "ranchi"] ,  
];

print_r($employee);
print_r($employee["address"]);
print_r($employee["address"]["city"]);




// ---------------------------- multidimensional arrays 

$employees = [
    ["id" => 101, "name" => "alice", "skills " => ["PHP", "SQL"]],
    ["id" => 102, "name" => "Bob", "skills " => ["Python ", "SQL"]]
];

echo " \n multidimensional array \n";
print_r($employees);
print_r($employees[1]);
echo $employees[0]["skills"][1];



//   ---------------------------- array methods ( for indexed array ) ---------------------------


$total = count($employee);     // it returns total no. of keys
echo $total;


// array_search
$array = [2, 50, 6, 8, 9, 78];
echo "\n";
echo array_search(2, $array);
echo array_search(7, $array);       // if the value doesnt exit in the array then nothing will be printed 



// sorting 
sort($array);     // returns in ascending order
print_r($array) ;


// rshot 
rsort($array);   // returns in descending order
print_r($array);



//  --------- sorting for associated array  ------------

asort($employee);    // it sorts on the basis of values in ascending order
print_r($employee);


arsort($employee);    // it sorts on the basis of values in descending order
print_r($employee);

ksort($employee);    // it sorts on the basis of keys
print_r($employee);



