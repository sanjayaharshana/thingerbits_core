<?php

Route::get('products', 'ProductController@index')->name('products.index');
Route::get('products/{slug}', 'ProductController@show')->name('products.show');
