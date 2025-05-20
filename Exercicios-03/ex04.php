<?php

$soma = 0;
$media = 0;
$j = 0;

for($i = 50; $i <= 70;$i++){
    if ($i % 2 == 0){
        $soma += $i;
        $j++;
    }
}

$media = $soma / $j;
echo "A soma é: $soma \n";
echo "A média é: $media \n";

