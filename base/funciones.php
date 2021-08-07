<?php

function concatenar($txt1, $txt2){  //no asigna mas de 4 parametros en caso de mas un arreglo
    return $txt1 . '' . $txt2;
}

//echo concatenar('Hola', 'Mundo');
//echo '<br>';

function suma($num1, $num2 ){
    return $num1+$num2;
}

function resta($num1, $num2 ){
    return $num1-$num2;
}

function multiplicacion($num1, $num2 ){
    return $num1*$num2;
}

function divicion($num1, $num2 ){
    return $num1/$num2;
}

function deducible(int $salario, $tipo){
    $porcentaje = 0;
    $smlv = 1014980;

    switch ($tipo){
       case 'salud':
        $porcentaje = 0.04;
        //$porcentaje = $porcentaje*$salario;
        break;
        case 'pension':
        $porcentaje = 0.04;
        //$porcentaje = $porcentaje*$salario;
        break;
        case 'arl':
        $porcentaje = 0.005;
        //$porcentaje = $porcentaje*$salario;
        break;
       // case 'fps':
           
         //   if ($salario >= 4000000){
           //     $porcentaje = 0.01;
             //  }
        
        //break;
    }
    return $salario * $porcentaje;
}

function deducibleII (int $salario, $base ){
    if ($salario >= $base){
        return ($salario*0.01);
       }
}







//echo suma(4, 7);
//echo '<br>';
//echo resta(4, 7);
//echo '<br>';
//echo multiplicacion(4, 7);
//echo '<br>';
//echo divicion(4, 7);
//echo '<br>';


function calcularora ($opc){
    return $opc;
   
}

//$opc  = "2";


  

?>