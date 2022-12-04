<?php

function exibirNome($nome)
{
    echo "Meu nome é $nome";
}

exibirNome("Geovane");

echo "<hr>";

function calcularMedia($nome, $n1, $n2, $n3, $n4)
{
    $media = ($n1 + $n2 + $n3 + $n4) / 4;
    if ($media >= 7) :
        echo "$nome foi aprovado com a média $media.";
    else :
        echo "$nome foi reprovado";
    endif;
}

calcularMedia("Bob", 5, 7, 9, 10);
echo "<hr>";
calcularMedia("Geraldo", 8, 6, 2, 14);
