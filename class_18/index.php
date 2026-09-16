<?php 
include 'classes/Person.php';
include 'traits/NotificationTrait.php';
include 'classes/Student.php';
include 'classes/Teacher.php';


// $student1 = new Student("Jane Smith", "54321", "09876");
// echo $student1->attend();
// echo $student1->sendNotification("{$student1->name} Attended Class.");

// echo $student1->eat();


// $student2 = new Student("John Smith", "1345", "784545");


$teacher1 = new Teacher();
$teacher1->name = "Mr. Smith";
$teacher1->subject = "Mathematics";
echo "<br>";
echo $teacher1->assignHomework("Math problems");
echo "<br>";
echo $teacher1->sendNotification("Homework assigned by {$teacher1->name} for subject {$teacher1->subject}.");

// $teacher2 = new Teacher();
// $teacher2->name = "Ms. Johnson";
// $teacher2->subject = "Science";
// echo "<br>";
// echo $teacher2->AssignHomework("Chemistry experiments");

// $teacher3 = new Teacher();
// $teacher3->name = "Mr. Brown";
// echo $teacher3->eat();

// $teacher3->subject = "History";
// echo "<br>";
// echo $teacher3->gradeStudent("John Doe", "A");