<?php
// session_start();
require_once ('Connect.php');
class Usuario
{
    protected $connect;
    private $id;
    public $email;
    public $password;

    public function __construct()
    {
        session_start();
       
    }

    public function validar($email,$password)
    {
        $conn = new Connect();
        $connect = $conn->init();
        $query = $connect->prepare("SELECT * FROM user WHERE email = :email AND password = :password");
        $query->bindParam(":email", $email);
        $query->bindParam(":password", $password);
        $query->execute();
        $usuario = $query->fetch(PDO::FETCH_ASSOC);
        //echo($usuario['']);
        if ($usuario) {
            $_SESSION['email'] = $usuario["email"];
            header("location:http://localhost/clases_php/base/POO/MYSQL/iniciosql.php");
        } else {
            $msg = "Email o contraseña no validos";
            $aPahtOrigin = explode('?', $_SERVER['HTTP_REFERER']);
            $pahtOrigin = $aPahtOrigin[0];
            //var_dump($aPahtOrigin);
            header("Location: $pahtOrigin?msg=$msg");
        }
    }

    function cerrarsesion()
    {
        session_unset();
        session_destroy();
        header("location:http://localhost/clases_php/base/POO/MYSQL/loginsql.php");
    }
}
