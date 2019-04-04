<?php

Route::get('checkout', 'CheckoutController@create')->name('checkout.create');
Route::post('checkout', 'CheckoutController@store')->name('checkout.store');

Route::get('checkout/complete/{orderId}/{paymentGateway}', 'CheckoutCompleteController@store')->name('checkout.complete.store');
Route::get('checkout/complete', 'CheckoutCompleteController@show')->name('checkout.complete.show');

Route::get('checkout/payment-canceled/{orderId}', 'PaymentCanceledController@store')->name('checkout.payment_canceled.store');
