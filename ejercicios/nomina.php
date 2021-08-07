<?php
require_once('../base/funciones.php');
$salario = $_GET['salario'] ?? '';
$cedula = $_GET['cedula'] ?? '';
$salud = $pension = $arl = $Fondo= 0;
$errorSalario = '' ;
//$porcentanjesalud = 0.04;
//$porcentajepension = 0.04;
//$porcentajearl = 0.005;
//$porcentanjefps = 0.01;
//$smlv = 1014980;


if ($salario && $cedula){
   $salud = deducible($salario, 'salud');
   $pension = deducible($salario,'pension');
   $arl= deducible($salario, 'arl');
   $fps = deducible($salario, 'fps');
 

}

if (isset($_GET['salario']) &&! $_GET['salario']){
   $errorSalario = 'Debe Ingresar un salario';
}



//if ($salario > ($smlv*4)){
  //  $Fondo = $salario * $porcentanjefps;
//}

//if ($salario >= 4000000){
// $Fondo=$salario*0.01;
//}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liquidacion</title>
</head>
<body>
    <form action="">
    <label>Salario</label>
    <input type="number" name="salario">
    <label style="color:red"><?php  echo  $errorSalario  ?></label>
    <br>
    <label>Cedula</label>
    <input type="number" name="cedula">
    <?php 
       if ( isset ( $_GET[ 'cedula' ]) &&  !$_GET[ 'cedula' ]) {
        echo  '<label style = "color: red"> Debe ingresar un cédula </label>' ;
      }
    ?>
    <br>
    <input type="submit" value="Enviar">
    
    </form>
  
   <?php 
       if ($salario && $cedula) {
       

        echo '
        <table border="1">
        <tr>
        <th>Cedula</th>
        <th>Salario </th>
        <th>Salud(4%)</th>
        <th>Pension(4%)</th>
        <th>ARL(0.5%)</th>
        <th>Fondo Pension Solidario(1% > 4 SLMM)</th>
        </tr> 
        <tr>
       
         <td>'.$cedula;'</td>
         <td>'.$salario;'</td>
         <td>'.$salud;'</td>
         <td>'.$pension;'</td>
         <td>'.$arl;'</td>
         <td>'.$Fondo;'</td>
         </tr>
         </table>';
      }
      ?>
   

    
</body>
</html>