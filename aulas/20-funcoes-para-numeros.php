<?php

/*
number_format
round
ceil
floor
rand */


//number_format
$db = 1234.56;
$preco = number_format($db, 2, ",", ".");
echo " o valor do produto é $preco";

echo "<hr>";

//round
echo round(3.6);

echo "<hr>";

//ceil = arredonda para cima
echo ceil(8.1);

echo "<hr>";

//floor = arredonda para baixo
echo floor(8.1);

echo "<hr>";

//rand = sorteia

echo rand(1, 20);
