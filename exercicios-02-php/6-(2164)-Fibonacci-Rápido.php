<?php

$n = (float)readline();

$fib = ((1+sqrt(5))/2)**$n - ((1-sqrt(5))/2)**$n;
$fib = $fib / sqrt(5);

echo number_format($fib,1, "." , "")."\n";