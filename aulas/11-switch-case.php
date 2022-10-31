<?php

$cor = "amarelo";

switch ($cor):
   case "vermelho":
      echo "sua cor preferida é vermelho";
      break;
   case "verde":
      echo "sua cor preferida é o verde";
      break;
   case "azul":
      echo "sua cor preferida é azul";
      break;

   default:
      echo "sua cor preferida não é vermelho, verde nem azul";
endswitch;
