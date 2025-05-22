<?php

$nomes = [];

for($i = 0; $i < 10; $i++){
    $nomes[] = readline("Digite o nome: ");
}
$i = 0;
$nomeBuscado = readline("Digite o nome buscado: ");

foreach($nomes as $nome){
    if($nome == $nomeBuscado){
        echo "Achei! \n";
        break;
    } else {
        $i++;
    }
}

if($i == 10){
    echo "Não achei! \n";
}