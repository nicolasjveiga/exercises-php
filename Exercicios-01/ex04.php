<?php

$salario = (int) readline("Digite o valor do salário mínimo: ");
$kWgasto = (int) readline("Digite o kW consumido: ");

$valor100kw = $salario / 7;

$valorPorKw = $valor100kw / 100;

$valorTotal = $valorPorKw * $kWgasto;

$valorComDesconto = $valorTotal * 0.9;

echo "Valor de 1 kW: R$ " . number_format($valorPorKw, 2, ',', ',') . "\n";
echo "Valor total: R$ " . number_format($valorTotal, 2, ',', ',') . "\n";   
echo "Valor com desconto: R$ " . number_format($valorComDesconto, 2, ',', ',') . "\n";