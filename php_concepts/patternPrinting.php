<?php
        //  square fill pattern printing

for($r=0 ; $r<5 ; $r++ ){
    for ($c = 0; $c < 5; $c++) {
        echo "*";

    }
    echo "\n";
}

         // right half pyramid
echo "------------ right half pyramid ----------------\n\n";
 for ($r=1 ; $r<6 ; $r++){
     for ($c=1 ; $c<=$r ; $c++){
        echo "*";
     }

    echo "\n";
 }     


    //    reverse right half pyramid
echo "----------- reverse right half pyramid -----------------\n\n";

for ($r =0 ; $r <5 ; $r++) {
      for($c=5 ; $c>$r ; $c--){
        echo "*";
      }

    echo "\n";
}

    //  left half pyramid
echo "----------- left half pyramid -----------------\n\n";
for ($r =0 ; $r <5 ; $r++) {
      for($c=5 ; $c>$r ; $c--){
        echo " ";
      }

    for ($c1 = 0; $c1 < $r+1 ;$c1++){
        echo "*";
    }

    echo "\n";
}

//   square hollow pattern
echo " ------------------ square hollow pattern ------------------\n\n";

for($r=0 ; $r<6 ; $r++ ){
    for ($c = 0; $c < 5; $c++) {
        if ($c==0 || $c==4 || $r==0 || $r==5){
            echo " * ";
        }
        else{
            echo "   ";
        }

    }
    echo "\n";
}

// pascal triangle
echo "--------- pascal triangle -----------";





// number triangle
echo "------------ number triangle -------------\n";
echo "enter no. of rows:";
$rows = readline();

for($r=1 ; $r<=$rows ; $r++){
   for($c=0 ; $c<$r+1 ; $c++){
        echo "$r";
   }
    echo "\n";
}