<?php

$contador1 = 0;
$contador2 = 0;
for ($contador2; $contador2 <= 10; $contador2++) {
  if ($contador2 != 10) {
    echo "volta $contador2\n";
  }
}
echo "-----------------\n";
while ($contador1 <= 15) {
  echo "volta $contador1" . PHP_EOL;
  if ($contador1 == 13) {
    break;
  }
  $contador1++;
}
