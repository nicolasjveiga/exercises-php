<?php

$i = 1;

while ($i = 1){

    $condicao = (int) readline("NOVO CÁLCULO(S/N)");
    if($condicao == "S"){
        $i = 1;
    } elseif($condicao == "N"){
        $i = 0;
    }

}