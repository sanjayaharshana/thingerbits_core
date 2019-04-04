<?php

Route::get('current-currency/{code}', 'CurrentCurrencyController@store')->name('current_currency.store');
