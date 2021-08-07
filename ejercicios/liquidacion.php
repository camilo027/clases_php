<?php
$salario = $_GET['salario'] ?? '';
$errorSalario = $_GET['errorsalario'] ?? '';
$salud = $_GET['salud'] ?? '';
$pension = $_GET['pension'] ?? '';
var_dump($pension);


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
    <form action="liquidacionaction.php?status=1" method="POST" >
    <label>Salario</label>
    <input type="number" name="salario">
    <label style="color:red"><?php  echo  $errorSalario  ?></label>
    <br>
    <label>Cedula</label>
    <input type="number" name="cedula">
    <?php 
       if ( isset ( $_GET[ 'cedula' ]) &&! $_GET[ 'cedula' ]) {
        echo  '<label style = "color: red"> Debe ingresar un cédula </label>' ;
      }
   
    ?>
    <br>
    <input type="submit" value="Enviar">
    <?php
    //include ("formulario.php");
    ?>
    </form>

</body>
</html>