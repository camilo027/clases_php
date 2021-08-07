<?php
$limit = 20;
for ($i=0; $i<=$limit; $i++){
echo 'el conte va en '. $i . '<br>';
}

$a = 5;
while ($a <= $limit){
    $a = $a * 2;
    echo 'a es '.$a . '<br>';
}

$limite = 100;
$div = 0;

for ($i=1; $i<=$limite; $i++){
     $div = $i%2;
    if ($div == 0){
        echo 'el numero es par  '. $i . '<br>';
    }else{
        echo 'el numero es impar  '. $i . '<br>';
    }

    
} 


$motos = [
'Vstrom 650xt',
'Akt 125',
'CBR 250R',
'r1m,'
];

foreach ($motos as $key => $value){
    echo "LLave: $key y valor: $value <br>";
}

//$autos = [
  //  'Mazda' => 'cx5'//posicion => valor
//];
//var_dump($autos);

$autos = [
    'Mazda' => [
        'CX5' ,
        '323' ,
        'CX7' ,
        '2' ,
    ],
    'BMW'  => [
        'Serie 2'  ,
        'Z4'  ,
        'M1'  , 
    ]
];

var_dump ($autos);
 echo '<br>';

foreach ($autos as $marca => $modelos) {
    echo "En la marca $marca tenemos los modelos: ";

    foreach ($modelos as $clave => $modelo) {
        echo "$modelo, ";
    }
    echo '<br>' ;
}

?>