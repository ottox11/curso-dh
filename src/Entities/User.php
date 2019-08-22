
<?php
class User
{

      private $id;
      private $email;
      private $password;
      private $registrationDate;

      public function __construct()
      {
        // VARIAS OPCIONES
        $this->registrationDate = date('Y-m-d H:i:s');
        $this->registrationDate = new DateTime;
      }
      public function setEmail(string $email)
      {
          $this->email = $email;
      }

      public function setPassword(string $password)
      {
          $this->password = password_hash($password, PASSWORD_DEFAULT);
      }

      public function getId() : string
      {
          return $this->id;
      }

      public function getEmail() : string
      {
          return $this->email;
      }

      public function getpassword() : string
      {
          return $this->password;
      }
      public function registrationDate()
      {
          return $this->registrationDate;
      }
}
