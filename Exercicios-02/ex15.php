<?php

$salarioFixo = (int) readline("Digite o salário fixo: ");
$vendas = (int) readline ("Digite o valor das vendas: ");
$valorComissao = (int) readline("Digite o valor mínimo para recerber 5% de comissão: ");
$salarioTotal = $salarioFixo + ($vendas * 0.03) ;

if($vendas > $valorComissao){
    $salarioTotal = $salarioTotal + ($vendas * 0.05) ;
}
echo "$salarioTotal \n";

