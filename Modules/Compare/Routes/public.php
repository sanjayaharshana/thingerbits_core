<?php

Route::get('compare', 'CompareController@index')->name('compare.index');
Route::post('compare', 'CompareController@store')->name('compare.store');
Route::delete('compare/{id}', 'CompareController@destroy')->name('compare.destroy');
