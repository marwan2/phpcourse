<?php

namespace App\Http\Controllers\Dash;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;

class PostsController extends Controller
{
    public function ajaxPost()
    {
    	return view('dash.posts.form');
    }

    public function save(Request $request)
    {
    	$validator = \Validator::make($request->all(), [
    		'name'=>'required',
    		'email'=>'required|email']
    	);

    	/*if($validator->fails()) {
    		return json_encode(['status'=>'validation', 'messages'=>$validator->messages()];
    	}*/

    	$post = Post::create($request->all());
    	if($post) {
    		return json_encode(['status'=>'success']);
    	} else {
    		return json_encode(['status'=>'error']);
    	}
    }

    public function lists()
    {
    	$posts = Post::orderBy('id', 'DESC')->get();
    	return view('dash.posts.list', ['posts'=>$posts]);
    }
}
