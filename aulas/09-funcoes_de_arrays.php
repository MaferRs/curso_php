<?php
// is_array($array) = verificar se uma determinada variável é um array

$nomes = array('Rodrigo', "Felipe", "Maria", "José");

if (is_array($nomes)) :
   echo "é um array";
else :
   echo " <br> <br> não é um array";
endif;
//var_dump(is_array($nomes)

// in_array($valor, array) = verificar se um determinado valor existe em alguma posição do array
$nomes = array('Rodrigo', "Felipe", "Maria", "José");
echo "<br> <br>";
echo in_array("Rodrigo", $nomes);

if (in_array("Felipe", $nomes)) :
   echo "<br> <br> existe no array";
else :
   echo "não exxiste no array";
endif;

// array_keys($array) = retorna um novo array com as chaves do array passando como parâmetro
$nomes = array("Primo" => 'Rodrigo', "Vizinho" => "Felipe", "Mãe" => "Maria", "Pai" => "José");
$keys = array_keys(($nomes));
echo "<br> <br>";
print_r($keys);


// array_values($array) = retorna um novo array com os valores do array passando como parâmetro

$nomes = array("Primo" => 'Rodrigo', "Vizinho" => "Felipe", "Mãe" => "Maria", "Pai" => "José");
$values = array_values(($nomes));
echo "<br> <br>";
print_r($values);


// array_merge($array1, $array2) = agrega o conteúdo dos dois arrays

$carros = array("Camaro", "Uno", "Gol");
$motos = array("Pop100", "50cc", "cb100");
$veiculos = array_merge($carros, $motos);
echo "<br> <br>";
print_r($veiculos);


// array_pop($array) = exclui a última posição do array

$carros = array("Camaro", "Uno", "Gol");
echo "<br> <br>";
print_r($carros);
echo "<br> <br>";
echo array_pop($carros);
echo "<br> <br>";
print_r($carros);

// array_shift($array) = exclui a primeira posição do array

$carros = array("Camaro", "Uno", "Gol");
echo "<br> <br>";
print_r($carros);
echo "<br> <br>";
echo array_shift($carros);
print_r($carros);
echo "<br> <br>";

// array_unshift($arr, "valor") = adiciona mais um elemento no início do array 


$frutas = array("Uva", "Laranja", "Maçã");
print_r($frutas);
echo "<br> <br>";
array_unshift($frutas, "Manga", "acerola", "morango");
print_r($frutas);


// array_push($array, "valor", "valor") = adiciona um ou mais elementos no final do array


$frutas = array("Uva", "Laranja", "Maçã");
echo "<br> <br>";
array_push($frutas, "Manga", "acerola", "morango");
print_r($frutas);

// array_combine($keys, $values) = mescla dois arrays passados

$keys = array("Campeão", "Vice", "Terceiro");
$values = array("Vasco", "Flamengo", "Botafogo");
$times = array_combine($keys, $values);
echo "<br> <br>";
print_r($times);


// array_sum() = calcula a soma dos elementos de um array

$soma = array(5, 6, 10, 8);
$total = array_sum($soma);
echo "<br> <br>";
echo $total;

// explode("/", "20/01/2001") = transforma string em array

$data = "30/02/2018";
$novaData = explode("/", $data);
echo "<br> <br>";
print_r($novaData);


$frase = "meu nome não é Johnny";
$array = explode(" ", $frase);
echo "<br> <br>";
print_r($array);

//implode("-", arr) = transforma array em string

$nomes = array('Rodrigo', "Carlos", "Neusa", "Talita");
$string = implode(", ", $nomes);
echo "<br> <br>";
echo $string;
