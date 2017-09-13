<?php

Route::get('courses', 'CoursesController@getCourses');

Route::get('courses/add', 'CoursesController@addNewCourse');

Route::post('exams/add', 'Front\ExamsController@add');

Route::controller('exams', 'Front\ExamsController');