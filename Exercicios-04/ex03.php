<?php

$vetor = [1, 2, 3, 4, 5, 200, 7, 8, 9, 10];
$maior = null;
$index = null;

for($i = 0;$i < 10; $i++){
    if($vetor[$i] > 0 && $vetor[$i] > $maior){
        $maior = $vetor[$i];
        $index = $i;
    }
}
echo $maior . "\n" . $index . "\n";