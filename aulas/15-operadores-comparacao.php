<?php
//Operadores de comparação

//== igualdade
if (10 == 10) :
   echo "Positivo";
else :
   echo "Negativo";
endif;
echo "<hr>";


//!= negacao

if (10 != 10) :
   echo "Positivo";
else :
   echo "Negativo";
endif;
echo "<hr>";



//=== identidade ,identico
if (10 === 10) :
   echo "Positivo";
else :
   echo "Negativo";
endif;
echo "<hr>";

//!==
if (10 !== 11) :
   echo "Positivo";
else :
   echo "Negativo";
endif;
echo "<hr>";


//<
if (10 < 6) :
   echo "Positivo";
else :
   echo "Negativo";
endif;
echo "<hr>";


//>

if (10 > 6) :
   echo "Positivo";
else :
   echo "Negativo";
endif;
echo "<hr>";


//<> diferente
if (10 <> 15) :
   echo "Positivo";
else :
   echo "Negativo";
endif;
echo "<hr>";


//<=
if (10 <= 6) :
   echo "Positivo";
else :
   echo "Negativo";
endif;
echo "<hr>";


//>=
if (10 >= 90) :
   echo "Positivo";
else :
   echo "Negativo";
endif;
echo "<hr>";

//<=> retorna somente 3 valores
// -1 lado esquerdo for menor
// 0 se os dois lados forem iguais
// 1 se o lado direito for menor


var_dump((20 <=> 30));
