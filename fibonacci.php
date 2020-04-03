<?php

function Fibonacci($n) {
    $num1 = 0;
    $num2 = 1;

    $counter = 0;
    while ($counter <= $n) {
        echo " " . $num1;
        $num3 = $num2 + $num1;
        $num1 = $num2;
        $num2 = $num3;
        
        $counter += 1;
    }
};

Fibonacci(10);

// Output: 0 1 1 2 3 5 8 13 21 34 55
