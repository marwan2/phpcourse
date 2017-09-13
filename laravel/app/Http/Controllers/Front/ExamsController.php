<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ExamsController extends Controller
{
    public function getIndex()
    {
        $exams = array(
            ['title'=>'exam 1', 'desc'=>'desc 1'],
            ['title'=>'exam 2', 'desc'=>'desc 2'],
            ['title'=>'exam 3', 'desc'=>'desc 3'],
            ['title'=>'exam 4', 'desc'=>'desc 4'],
        );

    	//return view('exams.index', ['exams'=>$exams]);
        return view('exams.index', compact('exams'));
    }

    public function getShow()
    {
    	return view('exams.show');
    }

    public function getAdd()
    {
    	return view('exams.add');
    }

    public function postAdd()
    {
    	return 'Form post';
    }
}
