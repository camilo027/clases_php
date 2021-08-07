<?php
 require_once('../base/funciones.php');

 $salario = $_GET['salario'] ?? '';
 $salario = intval($salario);
 $cedula = $_GET['cedula'] ?? '';
 $salud = $pension = $arl = $fps= 0;
 $base = 4*1014980;
 $errorSalario = '' ;
 
 if ( $salario && $cedula ) {
   $salud = deducible ( $salario , 'salud' );
   $pension = deducible ( $salario , 'pension' );
   $arl = deducible ( $salario , 'arl' );
   $fps = deducibleII ( $salario , $base );
 }
 
 
 if ( isset ( $_GET [ 'salario' ]) &&! $_GET [ 'salario' ]) {
   $errorSalario = 'Debe ingresar un salario' ;
 }
 
 if ( isset ( $_GET [ 'salario' ]) && $_GET [ 'salario' ] &&! $salario ) {
   $errorSalario = 'Debe ingresar un número mayor a 0' ;
 }
 
// echo "<p> $salario<p>";
// echo "<p> $cedula<p>";
      
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Formulario</title>
 </head>
 <body>
 <?php
    if ($salario && $cedula) {
    
    ?>
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
  
    <td><?php echo $cedula; ?></td>
    <td><?php echo $salario; ?></td>
    <td><?php echo $salud;?></td>
    <td><?php echo $pension;?></td>
    <td><?php echo $arl;?></td>
    <td><?php echo $fps;?></td>
   
    </tr>
    </table>
    <?php
    }
    ?>
 </body>
 </html>
