<?php

$idade = (int) readline("Digite sua Idade: ");

if ($idade >= 5 && $idade <= 7) {
    echo "Você está na categoria Infantil A \n";
} elseif ($idade <= 10) {
    echo "Você está na categoria Infantil B \n";
} elseif ($idade <= 13) {
    echo "Você está na categoria Juvenil A \n";
} elseif ($idade <= 17) {
    echo "Você está na categoria Juvenil B \n";
} else {
    echo "Você está na categoria Sênior \n";
}