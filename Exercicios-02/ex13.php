<?php
$inicio = (int) readline("Digite a hora do inicio: ");
$fim = (int) readline("Digite a hora do fim: ");
$total = 0;

if($inicio > $fim){
    $total = (24 - $inicio) + $fim;
} else {
    $total = $fim - $inicio;
}
echo "$total horas \n";