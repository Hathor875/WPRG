<?php
$a = 1;
$b = 1000000;

for ($x = $a; $x <= $b; $x++) {
    if (!($x == 0 || $x == 1)) {
        $isPrime = true;
        for ($i = 2; $i <= sqrt($x); $i++) {
            if ($x % $i == 0) {
                $isPrime = false;
                break;
            }
        }
        if ($isPrime) {
            echo $x . "\n";
        }
    }
}

