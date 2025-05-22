<?php

$nota1 = 0;
$nota2 = 0;
$media = 0;

while(true){

    $nota1 = (int) readline("Digite a primeira nota: ");
    $nota2 = (int) readline("Digite a segunda nota: ");
    $media = ($nota1 + $nota2) / 2;
    echo "$media \n";
    
    $condicao = (int) readline("NOVO CÁLCULO(S/N)? ");
    if($condicao != "S"){
        break;
    }

}