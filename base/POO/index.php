<?php 
require_once ('User.php');
require_once ('Connect.php');


$connect = new Connect;
$connect->init();

echo '<br><br>';


$id = random_int(1, 10000);
$user= new User($id);
//$user->setName('Pepe');
//$user->setLastName('Diaz');
//$user->getFullName($name+$lastname);


$user->email = 'camilo.027@gmail.com';
//var_dump($user);
echo '<br><br>';
//var_dump($user->getFullName());

echo '<br><br>';

$userByEmail = $user->getByEmail($user->email);

foreach ($userByEmail as $key=>$value) {
  var_dump($key);
  echo '<br><br>';
  var_dump($value);
}
echo '<br><br>';
var_dump($userByEmail);

?>