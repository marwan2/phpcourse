<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AccessController extends Controller
{
	public function __construct() {
    		
	}
    public function access()
    {
    	return view('access');
    }

    public function admin()
    {
    	return view('admin.index');
    }
}
