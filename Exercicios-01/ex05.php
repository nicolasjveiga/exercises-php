<?php

$base = 5;
$altura = 3;

$area = $base * $altura;

$perimetro = 2 * ($base + $altura);

$diagonal = sqrt($base ** 2 + $altura ** 2);

echo "Área: " . $area . "\n";
echo "Perímetro: " . $perimetro . "\n";
echo "Diagonal: " . $diagonal . "\n";