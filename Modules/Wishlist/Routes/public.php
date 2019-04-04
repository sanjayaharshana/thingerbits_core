<?php

Route::post('wishlist', 'WishlistController@store')->middleware('auth')->name('wishlist.store');
