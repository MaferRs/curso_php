<?php
// Funções para strings
/* strtoupper
    strtolower
    substr
    str_pad
    str_repeat
    strlen
    str_replace
    strpos
*/
// MAipuscula
$nome = "rodrigo oliveira";
$novoNome = strtoupper($nome);
echo $novoNome;

echo "<hr>";

//Minuscula
$nome = "rodrigo oliveira";
$novoNome = strtolower($nome);
echo $novoNome;

echo "<hr>";

//retorna a palavra da posição desejada
$mensagem = "Olá Mundo";
echo substr($mensagem, 4, 4);

echo "<hr>";

// espaço em branco
$objeto = "mouse";
$novoObjeto = str_pad($objeto, 7, "*", STR_PAD_LEFT);
echo $novoObjeto;


echo "<hr>";

// repete a palavra desejada
$strings = str_repeat("Sucesso", 5);
echo $strings;

echo "<hr>";

//Tamanho da palavra
$mensagem = "Olá, mundo";
echo strlen($mensagem);

echo "<hr>";

//muda uma palavra em especifico
$texto = "A seleção argentina será campeã da copa do m undo de 2018";
$novoTexto = str_replace("argentina", "Brasileira", $texto);
echo $novoTexto;

echo "<hr>";

// posição da palavra em especifico.
echo strpos($texto, "copa");
