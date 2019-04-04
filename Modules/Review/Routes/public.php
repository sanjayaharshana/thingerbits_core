<?php

Route::post('products/{productId}/reviews', 'ProductReviewController@store')->name('products.reviews.store');
