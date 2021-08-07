<?php

$miVariable = 'es es mi primer variable';
$miNumero = 10;
$miDecimal = 50.4;
$miBoolean = true;
$miNulo = null;
$miVacio = '';




$miSuma = $miNumero+$miDecimal;
$miResta = $miNumero-$miDecimal;
$miMultiplicacion = $miNumero*$miDecimal;
$miDivicion = $miNumero/$miDecimal;

echo $miVariable;
echo '<br>';
var_dump($miVariable);
echo '<br>';

var_dump($miNumero);
echo '<br>';

var_dump($miDecimal);
echo '<br>';

var_dump($miSuma);
echo '<br>';

var_dump($miResta);
echo '<br>';

var_dump($miMultiplicacion);
echo '<br>';

var_dump($miDivicion);
echo '<br>';

var_dump($miBoolean);
echo '<br>';

var_dump($miNulo);
echo '<br>';

var_dump($miVacio);
echo '<br>';
?>
