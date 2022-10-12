<?php
//Arrays Numericos

$carros = array(1 => "BMW", 2 => "Veloster", 3 => "Hillux");

//adiciona elementos ao array
$carros[] = "Amarok";
$carros[10] = "Camaro";


//mostra o valor a partir do indice
echo $carros[1];
echo '<hr>';


//mostra um array
print_r($carros);
echo '<br>';

echo '<hr>';

$motos = array();
$motos[] = "YAMAHA";
$motos[] = 'Honda';
$motos[5] = "Suzuki";
print_r($motos);

echo '<hr>';

$clientes = ["Rodrigo", "felipie", "bia"];
print_r($clientes);
echo '<hr>';


//// Count

$totalClients = count($clientes);
echo $totalClients;
echo '<hr>';

//Foreach = Para Cada
foreach ($carros as $valor) {
   echo $valor . '<br>';
}

echo '<hr>';
//Arrays associativos

$pessoa = array("nome" => "Rodrigo", "idade" => 23, "altura" => 1.75);
$pessoa['cidade'] = "itabuna";
print_r($pessoa);
echo '<hr>';
echo $pessoa["altura"];

echo '<hr>';
foreach ($pessoa as $indice => $valor) {
   echo $indice . ": " . $valor . '<br>';
}

// Arrays Multidimencionais

$times = array(
   'cariocas' => array("campeao carioca" => 'Vasco', "vice" => 'flamengo', "terceiro" => 'botafogo'),
   'paulistas' => array("campeao paulista" => 'santos',  "vice" => 'são paulo', "terceiro" => 'palmeiras'),
   'baianos' => array("campeao baiano" => 'bahia',  "vice" =>  'vitoria',  "terceiro" => 'itabuna')
);

echo '<hr>';
foreach ($times['cariocas'] as $indice => $valor) {
   echo $indice . ": " . $valor . "<br>";
}
echo '<hr>';
foreach ($times['paulistas'] as $indice => $valor) {
   echo $indice . ": " . $valor . "<br>";
}
echo '<hr>';
foreach ($times['baianos'] as $indice => $valor) {
   echo $indice . ": " . $valor . "<br>";
}
