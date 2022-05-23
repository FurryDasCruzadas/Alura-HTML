<?php
$altura = 1.8;
$peso = 71;
$imc = $peso / ($altura ** 2);


if ($imc >= 40)
  echo "OBESIDADE  GRAVE";
else if ($imc >= 30)
  echo "OBESIDADE  ";
else if ($imc >= 25)
  echo "SOBREPESO  ";
else if ($imc >= 18)
  echo "Normal  ";
else {
  echo "MAGREZA  ";
}
