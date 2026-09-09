<?php
echo "Enter total amount : ";
$total_amount = readline();

if ($total_amount >= 500){
    echo "\nYou got discount of 20% ... ";
    $discount = (20/100) * $total_amount;
    $total_amount= $total_amount - $discount ;
    echo"\nyour discounted price= $total_amount";
    
}
 
else if ($total_amount >=200  and $total_amount<=499){
    echo "\nYou got discount of 10% ... ";
    $discount = (10/100) * $total_amount;
    $total_amount= $total_amount - $discount ;
    echo"\nyour discounted price= $total_amount"; 
}

else{
    echo (" oops no discount . your amount is less than 200");
}