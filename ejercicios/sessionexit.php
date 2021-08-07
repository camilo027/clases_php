<?php
//session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cerrar Session</title>
</head>
<body>
<?php
$url="http://localhost/clases_php/ejercicios/login.php";
//session_unset();
unset($_SESSION['email']);
unset($_SESSION['password']);
session_destroy();
echo "se eliminan todas las variables de sesión y se destruye la sesión";
header("refresh:5;$url");



?>
</body>
</html>









