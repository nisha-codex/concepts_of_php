<?php
$numbers = [1, 2, 3, 4,5, 6, 7, 9];

// for ($i = 0; $i < count($numbers); $i++) {
//      for ($j=$i+1 ; $j<=$i+1 ; $j++){
//            if($numbers[$i] != $numbers[$j] -1 && $j<count($numbers)){
//             $missing = $numbers[$i] + 1;
//             echo "$missing";
//            }
//      }
// }



for ($i = 0; $i < count($numbers) - 1; $i++) {

    if ($numbers[$i + 1] != $numbers[$i] + 1) {
        $missing = $numbers[$i] + 1;
        echo "$missing";
        break;
    }
}
?>