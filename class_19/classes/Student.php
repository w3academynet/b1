<?php

class Student extends Person{
    use NotificationTrait;
    
    public $name;
    public $roll;
    public $reg;


    public function __construct($name = "", $roll = "", $reg = ""){
        $this->name = $name;
        $this->roll = $roll;
        $this->reg  = $reg;

        echo "Student object created with name: ".$this->name.", roll: ".$this->roll.", reg: ".$this->reg."<br>";
    }

    public function attend(){
        return $this->name." is attending the class.";
    }

}