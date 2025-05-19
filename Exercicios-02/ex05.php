<?php

$ano = 2008;
$idade = 2025 - $ano;

echo "Você tem " . $idade . " anos.\n";

if ($idade >= 16) {
    echo "Você é já pode votar.\n";
} else {
    echo "Você é ainda não pode votar.\n";
}
if ($idade >= 18) {
    echo "Você é já pode tirar a carteira de habilitação.\n";
} else {
    echo "Você é ainda não pode tirar a carteira de habilitação.\n";
}