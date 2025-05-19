<?php

$vetor = [];
$pares = 0;
$impares = 0;
$negativos = 0;
$positivos = 0;

for($i = 0; count($vetor) < 10; $i++){
    $vetor[] = readline("Digite: ");
    if($vetor[$i] > 0){
        $positivos++;
    } else {
        $negativos++;
    }
    if($vetor[$i] % 2 == 0){
        $pares++;
    } else {
        $impares++;
    }
}
echo $pares . " Pares" . "\n";
echo $impares .  " Impares" ."\n";
echo $negativos . " Negativos" . "\n";
echo $positivos . " Positivos" . "\n";

