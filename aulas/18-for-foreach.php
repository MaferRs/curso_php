<?php
for ($contador = 0; $contador <= 10; $contador++) :
    echo "o contador é $contador <br>";

endfor;


echo "<hr>";

for ($contador = 0; $contador <= 10; $contador++) :
    echo "8x $contador = " . ($contador * 8) . "<br>";
endfor;


//foreach = para cada 
echo "<hr>";

$cores = array("Verde", "Vermelho", "Azul");

foreach ($cores as $indice => $valor) :
    echo $indice . "-" . $valor . "<br>";
endforeach;
