<?php

Route::get('transactions', [
    'as' => 'admin.transactions.index',
    'uses' => 'TransactionController@index',
    'middleware' => 'can:admin.transactions.index',
]);
