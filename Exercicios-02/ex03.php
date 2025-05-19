<?php

$quantidade = 15;

if ($quantidade > 12){
    $valor = $quantidade * 1.30;
} else {
    $valor = $quantidade;
}

echo "O valor total é: R$ " . $valor . "\n";