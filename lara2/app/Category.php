<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = array();

    public function articles()
    {
    	return $this->hasMany('App\Article');
    }
}
