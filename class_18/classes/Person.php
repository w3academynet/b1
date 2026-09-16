<?php 

class Person{

    public $name;
    public $age;
    public $subject;

    public function introduce(){
        return "My name is ".$this->name;
    }

    public function eat()
    {
        return $this->name." is eating.";
    }
}