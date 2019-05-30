<?php

Route::get('shop/products', 'ProductController@index')->name('products.index');
Route::get('shop/products/{slug}', 'ProductController@show')->name('products.show');


