<?php

$mercadorias = (int) readline("Digite a quantidade de mercadorias: ");
$valorTotal = 0;
$media = 0;

for($i = 0; $i < $mercadorias; $i++){
    $valor = (int) readline("Digite o valor da mercadoria: ");
    $valorTotal += $valor;
}
$media = $valorTotal / $mercadorias;
echo "Valor total do estoque: $valorTotal \n";
echo "Média: $media \n";