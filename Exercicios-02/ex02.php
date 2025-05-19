<?php

echo "Digite um número: ";

$valor = fgets(STDIN);

if($valor > 0) {
    echo "O valor é positivo";
} else {
    echo "O valor é negativo";
}