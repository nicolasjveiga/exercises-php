<?php

echo "Escolha a forma de pagamento:\n";
echo "1 - À vista em dinheiro               |\n";
echo "2 - À vista no cartão                 |\n";              
echo "3 - 2x sem juros                      |\n";
echo "4 - 3x com juros                      |\n";
echo "--------------------------------------|\n";

$formaPagamento = (int) readline("Digite a forma de pagamento (1 a 4): ");

$price = (float) readline("Digite o preço do produto: ");

switch ($formaPagamento) {
    case 1:
        $precoFinal = $price - ($price * 0.1);
        echo "O preço do produto com desconto é: R$ " . number_format($precoFinal, 2, ',', '.') . "\n";
        break;
    case 2:
        $precoFinal = $price - ($price * 0.05);
        echo "O preço do produto com desconto é: R$ " . number_format($precoFinal, 2, ',', '.') . "\n";
        break;
    case 3:
        echo "O preço do produto é: R$ " . number_format($price, 2, ',', '.') . "\n";
        break;
    case 4:
        $precoFinal = $price + ($price * 0.2);
        echo "O preço do produto com juros é: R$ " . number_format($precoFinal, 2, ',', '.') . "\n";
        break;
    default:
        echo "Forma de pagamento inválida.\n";
}
