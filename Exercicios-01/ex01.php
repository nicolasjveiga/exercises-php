<?php

$dividendo = (int) readline ("Digite o dividendo: ");
$divisor = (int) readline ("Digite o divisor: ");

$quociente = $dividendo / $divisor;
$resto = $dividendo % $divisor;

echo "Quociente: $quociente \n" ;
echo "Resto : $resto \n";