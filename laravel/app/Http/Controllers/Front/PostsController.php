<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
	public $table = 'posts';

    public function myIndex()
    {
    	return view('front.posts.index');
    }

    public function show_post($id=null)
    {
    	//array('id'=>$id)
    	$title = 'Show Post';
    	return view('front.posts.show', ['id'=>$id, 'mytitle'=>$title]);
    }
}
