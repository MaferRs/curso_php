<?php

/*

$_POST
$_FILES
$_ENV
$_COOKIE
$_SESSION

 */

//$GLOBALS
//ela armazena todas a variaveis globais em um array chamado globals

$x = 10;
$y = 15;

function soma()
{
    echo $GLOBALS['x'] + $GLOBALS['y'];
}
soma();

echo "<hr>";

//$_SERVER
// array que contem varios indices, contem informações sobre: script, caminhos, cabeçalhos..
echo $_SERVER['PHP_SELF'] . "<br>";
echo $_SERVER['SERVER_NAME'] . "<br>";
echo $_SERVER['SCRIPT_FILENAME'] . "<br>";
echo $_SERVER['DOCUMENT_ROOT'] . "<br>";
echo $_SERVER['SERVER_PORT'] . "<br>";
echo $_SERVER['REMOTE_ADDR'] . "<br>";


//$_REQUEST
