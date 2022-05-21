<?php

  $idade = 2;
  $idade10Anos = 4;
  $idadeFinal = $idade**$idade10Anos;
  //$idadeFinal = $idade+$idade10Anos;
  //$idadeFinal = $idade/$idade10Anos;
  //$idadeFinal = $idade-$idade10Anos;
  //$idadeFinal = ($idade*$idade10Anos) + 1;
  $texto = "frase";
  $tipo = gettype($idade);

  //echo 'então seu tipo é ' . $tipo . ' mas vs é uma ' . $texto;

  echo "então seu tipo é $tipo\nmas vs é uma $texto\n";

  echo "então seu tipo é $tipo" . PHP_EOL;
  echo "as vs é uma $texto";