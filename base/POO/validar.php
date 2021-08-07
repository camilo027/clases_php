<?php

require_once ('Session.php');
//$email = $_REQUEST['email'];
//$password = $_REQUEST['password'];
$session=new session();
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$session->validar($id,$email,$password);
if($_REQUEST['cerrar']){
    $session->cerrarsesion();
}



?>

