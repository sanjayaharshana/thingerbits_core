<?php

Route::get('/', 'HomeController@index')->name('home');

Route::get('/shop', 'HomeController@shopfunction')->name('shops');


Route::get('/courses/{course_id}', 'HomeController@course_list')->name('courses_home_plates');


Route::get('{slug}', 'PageController@show');
