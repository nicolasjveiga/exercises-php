<?php

$n = 0;
$negativos = 0;

for($i = 0; $i < 10; $i++){
    $n = readline("Digite um número: ");
    if($n < 0){
        $negativos++;
    }
}
echo "$negativos números negativos \n";