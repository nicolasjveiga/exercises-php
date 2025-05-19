<?php

$vetor = [];
$inverso = [];

for($i = 0; $i < 10; $i++){
    $vetor[] = readline("Digite: ");
}
for($i = 0; $i <= count($vetor); $i++){
    $inverso[] = $vetor[count($vetor) - $i];
}
print_r($inverso);

