<?php

function fibonacci($n) {
  
    $num1 = 0;
    $num2 = 1;
    
    for($counter = 0; $counter < $n; $counter = $counter + 1) {
        echo " ".$num1;
        $num3 = $num1 + $num2;
        $num1 = $num2;
        $num2 = $num3;
        if ($num1 > 100) {
            break;
        }
    }
}
  
$n = 10;
fibonacci($n);