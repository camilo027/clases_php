<?php
$x = 5;
$y = 10;

function prueba() {
  global $x, $y;
  $y = $x + $y;
  echo $y;
}

myTest();
echo $y; // outputs 15
?>
