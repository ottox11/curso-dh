<?php

abstract class Persona
{
  protected $birthdate;
  protected $fullName;
}

public function setBirthdate($date)
{
  $this->birthdate = $date;
}

public function setFullName($fn)
{
  $this->fullName = $fn;
}

class Estudiante extends Persona
{
  public static $MIN_AGE = 18;
  public function setBirthdate($date)
  {
    $this->birthdate = $date;
  }

}

///////////////////////////////////////////////

class Producto
{
  const TAX = 21;
  public static $TAX = 21;
  private $price = .0;
}
  public function setPrice($price)
  {
    $this->price = $price;
  }

  public function getFinalPrice()
  {
    $iva = ($this->price * self::$TAX) / 100;
  }


  ///////////////////////////////////////////7

  class User
  {
    const STATUS_ACTIVE = 1;

    // 0 - activo / 1 - inactivo
    private $active = false;
  }

  $u-> new User;

  $u->setStatus(User::STATUS_ACTIVE);


  //////////////////////////////////////////////////7

  class User
  {
    public static $COUNTER = 0;

    public function __construct()
    {
      self::$COUNTER++;
    }
}
      new User;
      new User;
      new User;
      new User;
      new User;
      new User;
      new User;
      new User;
      new User;

      echo User::$COUNTER;


//////////////////////////////////////////7777
class User
{
  public static $COUNTER = 0;
  private static $instance;

  private function __construct()
  {
    self::$COUNTER++;
  }

  public static function getInstance()
  {
      if (!self::$instance){
       self::$instance = new self;
      }
      return self::$instance;
  }
}
$user = User::getInstance();
$user1 = User::getInstance();
$user2 = User::getInstance();

///////////////////////////////////////////////////////////

//// SINGLETON

class DB
{
  public static $HOST = 127.0.0.1;
  public static $DBNAME = null;
  public static $USER = null;
  public static $PASS = null;

  private static $instance;

  private function __construct()
  {

  }

  public static function getInstance()
  {
      if (!self::$instance){
      self::$instance =  new PDO('mysql:host='.self::$HOST.;dbname=.self::DBNAME,self::USER,self::$PASS);
      }
      return self::$instance;
  }
}

  DB::$HOST = 127.0.0.1;
  DB::$DBNAME = 'movies';
  DB::$USER = 'root';
  DB::$PASS = 'root';

  $pdo = DB::getInstance();

  ////////////////////////////////////////////
  interface GolpeableInterface
  {
    public function golpear(int $intensidad);
  }

  class Tambor implements GolpearInterface
  {
      public function golpear(int $intensidad): string
      {
        return 'tum';
      }
  }

  class Puerta implements GolpeableInterface
  {
    {
        public function golpear(int $intensidad): string
        {
          return 'toc';
        }
  }

  $puerta = new Puerta;

  echo $puerta->golpear();

////////////////////////////////////

abstract class Validator
{
  private $errors = [];

  public function getErrors()
  {
    return $this->errors;
  }
  abstract public function validate();
}

class UserValidator extends validator
{
  public function validate($data)
  {
    if ($this->isEmail($data['email']))
  }
}
 ?>
