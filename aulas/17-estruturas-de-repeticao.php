<?php
//While $ Do While
// primeiro faz a verificação e depois executa o trecho do código
$contador = 1;

while ($contador <= 10) :
    echo "Contador é $contador <br>";
    $contador++;
endwhile;


echo "<hr>";

// executa o trecho do código e depois faz a verificação
$contador  = 1;

do {
    echo "contador é $contador <br>";
    $contador++;
} while ($contador  <= 10);
