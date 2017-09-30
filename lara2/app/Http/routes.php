<?php

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::group(['prefix'=>'admin', 'namespace'=>'Admin', 'middleware'=>['login']], function() {

	Route::get('access', 'AccessController@access');
	Route::get('adminpage', 'AccessController@admin')->middleware('admin');
	Route::resource('articles', 'ArticlesController');

});

Route::group(['prefix'=>'/', 'namespace'=>'Front'], function() {

	Route::controller('/', 'HomeController');
});

/*Route::get('article1', function() {

	$article = App\Article::find(1);
	$article->created_at;
	$article->category->title;


	$category = App\Category::find(5);
	$category->articles;
	foreach ($category->articles as $article) {
		# code...
	}

	$categories = App\Category::with('articles')->get();
	foreach ($categories as $cat) {
		foreach ($cat->articles as $art) {
			# code...
		}		
	}

});*/