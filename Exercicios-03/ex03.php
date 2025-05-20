<?php

$i = -1;
$n = 1;
$media = 0;

while ($n != 0){
    $n = (int) readline("Digite o número (0 para sair): ");
    $media += $n; 
    $i++;
}
echo "Somatória: $media \n";
$media = $media / $i;
echo "Média: $media \n";
echo "Quantidade de valores lidos: $i \n";