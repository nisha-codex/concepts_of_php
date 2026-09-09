<?php

echo " enter your marks:";
$marks = readline();

if ( $marks>=90 && $marks <=100){
    echo "GRADE = A";
}

else if($marks>=80 && $marks <=89 ){
    echo " GRADE = B";
}

else if($marks>=70 && $marks <=79 ){
    echo " GRADE = C";
}

else if($marks>=60 && $marks <=69 ){
    echo " GRADE = D";
}
else if($marks>=0 and $marks <60) {
    echo " GRADE = F";
}
else {
    echo "!! invalid input !!";
}