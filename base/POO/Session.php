<?php
// session_start();
require_once ('Connect.php');
class Session
{
    private $id;
    public $email;
    public $password;

    public function __construct()
    {
        session_start();
    }

    

   public function validar($email,$password)
    {   
        /*$conn = new Connect();
        $connect = $conn->init();
        $query = $connect->prepare("SELEC * FROM user WHERE email=:email and password=:password");
        $query->bindParam("email", $email, PDO::PARAM_STR);
        $query->bindParam("password", $password, PDO::PARAM_STR);
        $query->execute();

        $result = $query->fetch(PDO::FETCH_ASSOC);

        if($result){
               $_SESSION['email']=$result['EMAIL'];
               //$msg = "email y  password ingresados correctos";
               echo '<p class="success">Congratulations, you are logged in!</p>';
               header("location:http://localhost/clases_php/base/POO/Inicio.php");
        }else{
            $msg = "email o password ingresados incorrectos";
            $aPahtOrigin = explode('?',$_SERVER['HTTP_REFERER']);
            $pahtOrigin = $aPahtOrigin[0];
            header("location:$pahtOrigin?msg=$msg");

        }*/


        if ($email === 'a@a.co' && $password === '1234') {
            $_SESSION['email'] = $email;
            $_SESSION['id'] = random_int(1, 1000);
            header("location:http://localhost/clases_php/base/POO/Inicio.php");
        } else {
            $msg = "Email o contraseña no validos";
            $aPahtOrigin = explode('?', $_SERVER['HTTP_REFERER']);
            $pahtOrigin = $aPahtOrigin[0];
            var_dump($aPahtOrigin);
            header("Location: $pahtOrigin?msg=$msg");
        }
    }

    function cerrarsesion()
    {
        session_unset();
        session_destroy();
        header("location:http://localhost/clases_php/base/POO/Login.php");
    }
}

