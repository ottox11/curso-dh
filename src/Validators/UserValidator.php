<?php

class UserValidator
{
      //LO que voy a validar
      private $user;
      private $errors = [];

      public function __construct(array $data)
      {
        $this->user = $data;
      }

      public function validate()
      {
        if (!filter_var(this->user['email'], FILTER_VALIDATE_EMAIL)){
           $this->errors['email'] = 'Email no valido';
        }
      }

      public function getErrors()
      {
        return this->errors;
      }

      public function getError($field)
      {
        return this->errors[$field] ?? '';
      }

      public function isValid()
      {
        return empty($this->errors);
      }
}




 ?>
