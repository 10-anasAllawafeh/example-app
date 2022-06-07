<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
use App\Models\course;

class StudentController extends Controller
{
    public function manyToMany_relation(){
        $student = student::find(2);
        $course = course::find([3, 4]);
        $student->callCourses()->attach($course);
        return 'Success';
    }
}
