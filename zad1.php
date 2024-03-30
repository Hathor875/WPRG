<?php

$fruit = array("jablko", "banan", "pomarancza");


foreach ($fruit as $x) {
    $string = $x;
    $reverse = '';
    $i = 0;
    while(!empty($string[$i])){
        $reverse = $string[$i].$reverse;
        $i++;
    }
    echo "$reverse \n";
}


