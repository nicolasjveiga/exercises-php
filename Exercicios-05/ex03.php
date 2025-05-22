<?php

$numbers = [];
$i = 0;
$maior = 0;
while ($i < 10){
    $numbers[] = readline("Digite o número: ");
    $i++;
}    
function maior($numbers){
    $maior = 0;
    foreach($numbers as $number){
        if($number > $maior){
            $maior = $number;
        }
    } 
    return $maior;
}

echo "Maior: " . maior($numbers) . "\n";