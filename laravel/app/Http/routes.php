<?php

Route::get('courses', 'CoursesController@getCourses');
Route::get('courses/add', 'CoursesController@addNewCourse');
Route::post('exams/add', 'Front\ExamsController@add');
Route::controller('exams', 'Front\ExamsController');


Route::get('get/my/posts', function() {
	return view('front.posts');
});

Route::get('posts/index', 'Front\PostsController@myIndex');

Route::get('posts/show/{id?}', 'Front\PostsController@show_post');

Route::get('master', function() {
	return view('front.master');
});

Route::get('articles', 'ArticlesController@getArticles');