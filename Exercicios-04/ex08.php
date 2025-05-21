<?php

$quantidade = (int) readline("Digite a quantidade de aluno: ");
$notas = [];
$alunos = 0;
$soma = 0;

for($i = 0; $i < $quantidade; $i++){
    $notas[] = readline("Digite a nota do aluno: ");
}

foreach($notas as $nota){
    $soma += $nota; 
}

$media = $soma / $quantidade;

foreach($notas as $nota){
    if($nota > $media){
        $alunos++;
    }
}

echo "Média: $media \n";
echo "Alunos acima da média: $alunos \n";
