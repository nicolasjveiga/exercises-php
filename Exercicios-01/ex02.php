<?php

$notas = [10, 2 , 3, 4];
$pesos = [1, 2, 3, 4];

$somaNotas = 0;
$somaPesos = 0;

for ($i = 0; $i < count($notas); $i++) {
    $somaNotas += $notas[$i] * $pesos[$i];
    $somaPesos += $pesos[$i];
}

$media = $somaNotas / $somaPesos;
echo "A média ponderada é: " . $media;