<?php

abstract class Persona
{
    // toda clase que herede va definir el comportamiento de esa funcion
    abstract public function getName();


}

class Estudiante extends Persona
{
    public function getName()
    {
    return $this->email;
    }
}

abstract class Animal
{
    private $name;

    abstract public function move();

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name
    }


}
  ?>
