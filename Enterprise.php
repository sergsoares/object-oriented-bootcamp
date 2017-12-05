<?php

class Person
{
    protected $name;

    public function __construct($name) {
       $this->name = $name; 
    }

}

class Business
{
    protected $staff;

    public function __construct(Staff $staff) 
    {
       $this->staff = $staff;
    }

    public function hire(Person $person)
    {
        $this->staff->add($person);
    }

}

class Staff
{
    protected $members = [];

    public function __construct($members = [])
    {
        $this->members = $members;
    }

    public function add(Person $person)
    {
        $this->members[] = $person;
    }

}

$sergio = new Person('Sergio');
$carlos = new Person('Carlos');

$staff = new Staff();

$business = new Business($staff);

$business->hire($sergio);
$business->hire($carlos);

var_dump($staff);