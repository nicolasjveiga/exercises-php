<?php

$hora = (int) readline("Digite a hora: ");
$minuto = (int) readline("Digite os minutos: ");

$minutosTotais = ($hora * 60) + $minuto;
echo "A quantidade total de minutos é: $minutosTotais \n";