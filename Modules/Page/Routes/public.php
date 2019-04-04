<?php

Route::get('/', 'HomeController@index')->name('home');

Route::get('/shopcenter', 'HomeController@shopfunction')->name('shops');


Route::get('{slug}', 'PageController@show');
