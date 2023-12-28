<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function allCourse()
    {
        return view("courses.all-courses");
    }

    public function addCourse()
    {
        return view("courses.add-courses");
    }

    public function trashCourse()
    {
    }
}
