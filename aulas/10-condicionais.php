<?php

/*Concidionais
if
else
elseif */
//
$numero = 8;

if ($numero == 10) :
   echo "é igual a 10";
elseif ($numero <= 9) :
   echo "é menor ou igual a 9";
else :
   echo "é diferente de 10";
endif;

// operador ternario

echo "<hr>";

$media = 6;

echo ($media >= 7) ? "Aprovado" : "reprovado";
