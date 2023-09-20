<?php

echo "====== For loop ======\n";

function isEven($start, $end, $step) {
    for ($i = $start+1; $i <= $end; $i += $step) {
        echo $i." ";
    }
}

isEven(1,20,2);

echo "\n";

echo "====== While loop ======\n";

function isEvenNumber($start, $end, $step) {
    $i = $start+1;
    while ($i <= $end) {
        echo $i." ";
        $i += $step;
    }
}

isEvenNumber(1, 20, 2);

echo "\n";

echo "====== do While loop ======\n";

function isEvenNumbers($start, $end, $step) {
    $i = $start+1;
    do {
        echo $i." ";
        $i += $step;
    } while ($i <= $end);
}

isEvenNumbers(1, 20, 2);
