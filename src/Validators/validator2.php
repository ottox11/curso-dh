<?php 

abstract class Validator
{
    private $errors = [];

    public function getErrors() 
    {
        return $this->errors;
    }

    public function addError($key, $message = '') 
    {
        $this->errors[$key][] = $message;
    }

    public function isEmail($email) 
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    public function exists($key, $array) 
    {
        return array_key_exists($key, $array);
    }

    abstract public function validate($data);
}

class UserValidator extends Validator 
{
    public function validate($data) 
    {
        if (!$this->exists('email', $data)) {
            $this->addError('email', 'El campo email es requerido');            
        } else {
            if (!$this->isEmail($data['email'])) {
                $this->addError('email', 'El campo email no es valido');
            }
        }
    }
}

$user = [
    'email' => 'asdasd',
];

$validator = new UserValidator;

$validator->validate($user);

var_dump($validator);