<?php
require_once('Connect.php');

class User{
  protected $connect;
  private $id;
  public $name;
  public $lastname;
  public $fullname;
  public $email;
  protected $password;

  public function __construct(int $id)
  {
    $this->id = $id;
    $newConnect = new Connect;
    $this->connect = $newConnect->init();
  }


  public function setName(string $name)
  {
      $this->name = $name;
  }

  public function setLastName(string $lastname)
  {
      $this->lastname = $lastname;
  }

  public function getFullName()
  {
      //var_dump($name+$lastname);
      return $this->name . '' . $this->lastname;
  }

  public function getByEmail(string $email){
    $sql = "SELECT * FROM user WHERE email='$email'";
    return $this->connect->query($sql);
  }

  public function validar($email, $password){
    $connect = new Connect();
    $connect = $connect->init();
    $query = $connect->prepare("SELECT * FROM USER");
  }

  public function __destruct()
  {
    echo 'Se termino el objeto User';
  }



}


?>