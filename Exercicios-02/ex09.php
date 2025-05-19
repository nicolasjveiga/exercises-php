<?php

$number = readline("Digite um número: ");

if ($number > 30 && $number < 90){
    echo "O número está entre 30 e 90";
} elseif ($number > 120) {
    echo "O número é maior que 120";
} else {
    echo "O Número não está em nenhuma das condições";
}