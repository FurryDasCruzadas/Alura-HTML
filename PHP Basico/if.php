<?php

$idade = 16;
$pessoas = 2;

if ($idade >= 18) {
  echo "Voçe pode entrar";
} 
else if ($idade >= 16 && $pessoas >= 2) {
  echo "pode entrar acompanhado";
} 
else {
  echo "nao pode entra pois tem $idade anos";
}

// $$ = and
// || = or