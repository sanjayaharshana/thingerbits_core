<?php

Route::get('/', 'DashboardController@index')->name('admin.dashboard.index');

Route::get('/sales-analytics', [
    'as' => 'admin.sales_analytics.index',
    'uses' => 'SalesAnalyticsController@index',
    'middleware' => 'can:admin.orders.index',
]);

Route::get('/lessonpanel', 'DashboardController@lessionpan')->name('lessonrout');
Route::get('/addlesson', 'DashboardController@addles')->name('addlesson');

Route::post('/intertlesson', 'DashboardController@insertlesson')->name('lessoninsert');

Route::get('/lessonpanel/{courseid}', 'DashboardController@courseopener')->name('courseopenerrc');

Route::get('/parellel/{lessonid}', 'DashboardController@lessoneditor')->name('lessonedit');

Route::post('/parellel/update', 'DashboardController@updatelesson')->name('lesupdate');

