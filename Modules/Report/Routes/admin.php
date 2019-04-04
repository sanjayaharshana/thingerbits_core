<?php

Route::get('reports', [
    'as' => 'admin.reports.index',
    'uses' => 'ReportController@index',
    'middleware' => 'can:admin.reports.index',
]);
