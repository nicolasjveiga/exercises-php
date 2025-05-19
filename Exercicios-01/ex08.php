<?php

$salarioFixo = 1000;
$valorVendas = 10000;
$numeroVendas = 10;
$comissao = 0.05;

$salarioComComissao = $salarioFixo + ($valorVendas * $comissao) + ($numeroVendas * 50);
echo "Salário com comissão: R$ " . number_format($salarioComComissao, 2, ',', '.') . "\n";
