<?php

function multiploQuatro($n1){
    if($n1 % 4 == 0){
        return true;
    } else {
        return false;
    }
}

function parOuimpar($n1){
    if($n1 % 2 == 0){
        return true;
    } else {
        return false;
    }
}

function soma($a, $b){
    $result = 0;
    while ($a < ($b - 1)){
        $a++;
        $result += $a;
    }
    return $result;
}

function somaDivisiveis($a, $b, $c){
    $i = $b;
    $result = 0;
    while($i < $c){
        $i++;
        if($i % $a == 0){
            $result += $i;
        }
    }
    return $result;
}

function pesoIdeal($altura, $sexo){
    if ($sexo == "Homem"){
        return (72.7 * $altura) - 58;
    }
    if ($sexo == "Mulher"){
        return (62.1 * $altura) - 44.7;
    }
}

var_dump(multiploQuatro(5));
var_dump(parOuimpar(5));
echo soma(1, 5) . "\n";
echo somaDivisiveis(2, 5, 10) . "\n";
echo pesoIdeal(1.70, "Homem") . "\n";

