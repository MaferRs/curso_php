<?php
//Operadores Lógicos
//Nos permite fazer comparações entre expressões
//e(&& - and)
// ou (|| - or)
// ou exclusivo (xor)
//negação (!)



$idade = 25;
$nome = "Rodrigo";


// retorna um valor verdadeiro quando duas expressões são verdadeiras
if (($idade == 25) && ($nome == "Rodrigo")) :
    echo "é verdadeiro";
else :
    echo  "é falso";
endif;

echo "<hr>";
// retorna verdade estando pelo menos uma das expressões verdadeiras, só retornará falso se as duas estiverem falsas.
if (($idade == 25) or ($nome == "Rodrigo")) :
    echo "é verdadeiro";
else :
    echo  "é falso";
endif;


echo "<hr>";
// retorna verdadeiro quando apenas uma expressão for verdadeira ou um ou outro, se os dois forem verdadeiros, retorna falso.

if (($idade == 25) xor ($nome == "Rodrigo")) :
    echo "é verdadeiro";
else :
    echo  "é falso";
endif;

echo "<hr>";
// nega a expressão, se for verdadeira fiac falsa e vice-versa
if (!($idade == 25) and ($nome == "Rodrigo")) :
    echo "é verdadeiro";
else :
    echo  "é falso";
endif;
