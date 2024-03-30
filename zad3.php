<?php
$f0 = 0;
$f1 = 1;
$N = 50;
$fibonacciNumbers = array($f0);
$f = $f0;
$fn = $f1;
for ($i = 0; $i < $N; $i++) {
    $temp = $fn;
    $fn = $fn + $f;
    $f = $temp;
    $fibonacciNumbers[] = $fn;
}
foreach ($fibonacciNumbers as $x) {
    echo "$x \n ";
}





