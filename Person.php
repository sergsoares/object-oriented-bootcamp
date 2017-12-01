<?php

class Person
{
    public $name;
    public $age;

    public function __construct($name,$age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function setAge($age){

        if($age > 18){
            $this->age = $age;
        }
        
        throw new Exception("This age is incorrect");
    }
}

$person = new Person('Sergio', 23);

$person->setAge(15);

var_dump($person);
