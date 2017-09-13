<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;

class CoursesController extends Controller
{
    public function getCourses()
    {
    	return view('courses.courses');
    }

    public function addNewCourse()
    {
    	return view('courses.add');
    }

}
