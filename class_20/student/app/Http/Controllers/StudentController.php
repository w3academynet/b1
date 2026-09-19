<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function welcome()
    {
        // $student = new Student();
        // return  "Welcome " . $student->getLoggedInUser();

        return "Welcome " . Student::getLoggedInUser();
    }

    public function subjects()
    {
        return Student::getSubjects();
    }

    public function about()
    {
        return "About Us from controller";
    }

    public function contact()
    {
        return "Contact Us from controller";
    }
}
