<?php

Route::get('/', 'HomeController@index')->name('home');

Route::get('/shop', 'HomeController@shopfunction')->name('shops');


Route::get('{slug}', 'PageController@show');
