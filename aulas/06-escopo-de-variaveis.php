<?php
//Escopo Global
$nome = "Rodrigo Oliveira";
$a = 1;
$b = 3;
$c = 7;

function exibeNome()
{
   global $nome;
   echo $nome;
}

exibeNome();
echo "<hr>";
////////////////////////

//Local
function exibeCidade()
{
   global $cidade;
   $cidade = "Rio De Janeiro";
}
exibeCidade();
echo $cidade;
echo "<hr>";

/////////////////////

function soma()
{
   echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
}
soma();
