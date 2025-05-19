<?php

function digitoVerificador($conta) {

    $original = $conta;
    $inverso = 0;

    while ($conta > 0) {
        $digito = $conta % 10;           
        $inverso = $inverso * 10 + $digito; 
        $conta = intdiv($conta, 10);     
    }

    $soma = $original + $inverso;

    $temp = $soma;
    $digitos = [];
    while ($temp > 0) {
        $digitos[] = $temp % 10;
        $temp = intdiv($temp, 10);
    }

    $total = 0;
    $posicao = 1;
    for ($i = count($digitos) - 1; $i >= 0; $i--) {
        $total += $digitos[$i] * $posicao;
        $posicao++;
    }

    $digitoVerificador = $total % 10;
    return $digitoVerificador;
}


$conta = 123;
$digito = digitoVerificador($conta);

echo "O dígito verificador da conta $conta é: $digito\n";
