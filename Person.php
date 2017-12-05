<?php

class Person
{
    private $name;
    private $age;

    public function __construct($name,$age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getAge()
    {
        return $this->age * 365;
    }

    public function setAge($age)
    {
        if($age > 18){
            $this->age = $age;
            return;
        }
        
        throw new Exception("This age is incorrect");
    }

    public function moreOneYear()
    {
        $this->addYears(1);
    }

    public function addYears($more)
    {
        $this->age += $more;
    }
}

$person = new Person('Sergio', 30);

// $person->setAge($person->getAge() + 1);
$person->moreOneYear();
$person->moreOneYear();
$person->moreOneYear();

var_dump($person->getAge());
var_dump($person->getAge());
