<?php

$n = [];
$i = 5;

while(count($n) < 10){
    $n[] = $i;
    $i += 5;
}

print_r($n);