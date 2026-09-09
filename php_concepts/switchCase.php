<?php
echo "enter colour : ";
$colour = strtolower(readline());

switch ($colour){
    case "red":
        echo " your colour is red ";
        break;
    case "blue":
        echo " your colour is blue ";
        break;
    case "yellow":
        echo " your colour is yellow ";
        break;
    case "green":
        echo " your colour is green ";
        break;  
    case "pink":
        echo " your colour is pink ";
        break;  
    case "purple":
        echo " your colour is purple ";
        break;
    case "black":
        echo " your colour is black ";
        break;
    case "white":
        echo " your colour is white";
        break;
    default:
        echo "you have choose wrong colour";
        
}