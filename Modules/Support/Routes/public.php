<?php

Route::get('countries/{code}/states', 'CountryStateController@index')->name('countries.states.index');
