<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ArticlesController extends Controller
{
    public function getArticles()
    {
    	$data = '';
    	for ($i=0; $i < 10; $i++) { 
    		$data .= $i . '<br>';
    	}

    	return view('front.articles', ['i'=>$data]);
    }
}