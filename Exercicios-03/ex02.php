<?php 

$n = 0;
$media = 0;

for($i = 1; $i <= 10; $i++){
    $n = (int) readline("Digite o número: ");
    $media = $media + $n;
}
$media = $media / 10;
echo "A média é: " . $media . "\n";