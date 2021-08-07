<?php
require_once('funciones.php');  //solo una vez 
$num1 = $_GET['n1'] ?? 0;
$num2 = $_GET['n2'] ?? 0;
$opc = $_GET['opc'] ?? 0;
var_dump($num1);

function calculadora(int $n1, int $n2, string $opc){
    $res = '';
  switch ($opc){
    case '+':
        $res = suma($n1, $n2);
        break;
    case '-':
        $res = suma($n1, $n2);
        break;    
    case '*':
        $res = suma($n1, $n2);
        break;
    case '/':
        $res = suma($n1, $n2);
        break;
    default:
            $res = 'No eligigio una operacion valida!';
            break;

  }
    return "$n1 $opc $n2 =$res";
}

echo calculadora($num1, $num2, $opc);

?>