<?php

$salarioFixo = (int) readline("Digite o salario fixo: ");
$valorVendas = (int) readline("Digite o valor das vendas: ");
$numeroVendas = (int) readline("Digite o número de vendas: ");
$comissao = 0.05;

$salarioComComissao = $salarioFixo + ($valorVendas * $comissao) + ($numeroVendas * 50);
echo "Salário com comissão: R$ " . number_format($salarioComComissao, 2, ',', '.') . "\n";
