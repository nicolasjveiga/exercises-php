<?php

$vetorA = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$vetorC = [];
$b = 10;

foreach($vetorA as $number){
    $vetorC[] = $number * $b;
}

print_r($vetorC);

