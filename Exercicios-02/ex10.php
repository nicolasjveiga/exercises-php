<?php

$valor = readline("Digite o valor: ");

$aumento = ($valor < 20) ? 0.45 : 0.30;
$valorFinal = $valor * (1 + $aumento);

echo "O valor final é: $valorFinal \n";
