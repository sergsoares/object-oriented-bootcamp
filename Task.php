<?php

class Task
{
   public $description;
   public $title; 
   public $completed = false;

   public function __construct($title, $description) 
   {
       $this->title = $title;
       $this->description = $description;
   }
}

$task = new Task('OO Bootcamp', 'Learning a lot about OO programing concepts');

var_dump($task->description, $task->title);