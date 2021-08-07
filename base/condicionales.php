<?php


$x = 10;
$y = '10';


if ($x == $y){
    echo 'son iguales';
}

if ($x === $y){
 echo 'son identicos';
}else{
    echo 'No son identicos';
}

if ($x != $y){
    echo 'si son diferentes';
}

echo php_eol;

if($x > $y){
    echo '$x es mayor que $y';
} else if ($x < $y){
    echo '$x es menor que $y';
} else if ($x == $y){
    echo '$x es igual que $y';
} else {
    echo 'ninguna de las anteriores';
}

echo PHP_EOL;
if (($x == $y) && ($x >0 )){
    echo "$x es igual a $y y $x es mayor que o";
}
?>