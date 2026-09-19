<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public static function getLoggedInUser()
    {
        $user = "Jane Doe";
        return $user;
    }


    public static function getSubjects()
    {
        $subjects = ["Math", "Science", "History"];
        return $subjects;
    }
}
