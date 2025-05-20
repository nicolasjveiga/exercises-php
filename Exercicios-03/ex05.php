<?php

$n = null;
$maior = null;
$menor = null;

while ($n !== 0) {
    $n = (int) readline("Digite o número: ");
    
    if ($n !== 0) {
        if ($maior === null || $n > $maior) {
            $maior = $n;
        }
        
        if ($menor === null || $n < $menor) {
            $menor = $n;
        }
    }
}

echo "Maior: $maior \n";
echo "Menor: $menor \n";
