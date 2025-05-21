<?php

$horas = (int) readline("Digite as horas trabalhadas: ");
$salarioHora = (int) readline("Digite o salário por hora: ");
$horaExtra = 0;
$salarioTotal = 0;

if($horas > 40) {
    $horaExtra = $horas - 40;
    $salarioTotal = ($salarioHora * 40) + $horaExtra * ($salarioHora * 1.5);
} elseif($horas < 40){
    $salarioTotal = $salarioHora * $horas;
    $salarioTotal -= ($salarioTotal * 0.05);
} else {
    $salarioTotal = $horas * $salarioHora;
}


echo "$salarioTotal \n";