<?php

//Contantes
define("NOME", "José Carlos");
define("IDADE", 24);
define("ALTURA", 1.89);
define("CASADO", true);
define("TIMES", ['vasco', 'flamengo', 'santos']);

// os identificadores das contantes são sempre em çetras maiúsculas, e o valor não pode ser alterado.

echo  'Meu nome é ' . NOME . ',e minha idade é ' . IDADE . ', e minha altura é ' . ALTURA . '.';
echo '<hr>';
echo TIMES[1];
var_dump(TIMES);

function exibeNome()
{
   echo NOME;
}

ExibeNome();
