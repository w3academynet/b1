<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    public static function getTeachers()
    {
        $teachers = ["Mr. Smith", "Ms. Johnson", "Mrs. Brown"];
        return $teachers;
    }
}
