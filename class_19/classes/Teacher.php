<?php 

class Teacher extends Person{
    use NotificationTrait;
    
    public $name;
    public $subject; 
    

    public function assignHomework($homework){
        return $this->name." has assigned homework: ".$homework;
    }

    public function gradeStudent($studentName, $grade){
        return $this->name." has graded ".$studentName." with a grade of ".$grade;
    }

}