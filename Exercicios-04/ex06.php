<?php

$vetorA = [];
$vetorB = [];
$result= [];

for($i = 0; $i < 10 ; $i++){
    $vetorA[] = (int) readline("Digite um valor para o vetor A: ");
    $vetorB[] = (int) readline("Digite um valor para o vetor B: ");
}
print_r($vetorA);
print_r($vetorB);

for($i = 0; $i < 10; $i++){
    $result[] = $vetorA[$i] * $vetorB[$i];
}

print_r($result);

