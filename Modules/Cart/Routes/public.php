<?php

Route::get('cart', 'CartController@index')->name('cart.index');

Route::post('cart/items', 'CartItemController@store')->name('cart.items.store');
Route::put('cart/items/{cartItemId}', 'CartItemController@update')->name('cart.items.update');
Route::delete('cart/items/{cartItemId}', 'CartItemController@destroy')->name('cart.items.destroy');

Route::post('cart/shipping-method', 'CartShippingMethodController@store')->name('cart.shipping_method.store');

//thingerbits core editing
Route::post('cart/course', 'CartItemController@buycoursecart')->name('buycourse');
