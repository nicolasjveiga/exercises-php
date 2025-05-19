<?php

$idade = 20;

if ($idade >= 5 && $idade <= 7) {
    echo "Você está na categoria Infantil A";
} elseif ($idade <= 10) {
    echo "Você está na categoria Infantil B";
} elseif ($idade <= 13) {
    echo "Você está na categoria Juvenil A";
} elseif ($idade <= 17) {
    echo "Você está na categoria Juvenil B";
} else {
    echo "Você está na categoria Sênior";
}