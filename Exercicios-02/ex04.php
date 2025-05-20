<?php

$a1 = (int) readline ("Digite a nota da primeira prova: ");
$a2 = (int) readline ("Digite a nota da segunda prova: ");
$media = ($a1 + $a2) / 2;

if ($media >= 6) {
    echo "Aprovado! - Média: $media  \n";
} else {
    echo "Reprovado! - Média:  $media \n" ;
}
