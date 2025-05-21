<?php

$base = (int) readline("Digite a base: ");
$altura = (int) readline("Digite a altura: ");

$area = $base * $altura;

$perimetro = 2 * ($base + $altura);

$diagonal = sqrt($base ** 2 + $altura ** 2);

echo "Área: $area \n";
echo "Perímetro: $perimetro \n";
echo "Diagonal: $diagonal \n";