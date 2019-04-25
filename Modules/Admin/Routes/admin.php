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

Route::get('/parellel/delete/{valueid}', 'DashboardController@deletelesson')->name('lesdelete');

Route::get('/addles/add/{cour_id}', 'DashboardController@addlesson')->name('addlesadd');

Route::post('/addles/insert', 'DashboardController@insertles')->name('adleson');

Route::get('/createcourse', 'DashboardController@createcourse')->name('createcourserout');

Route::post('/createcourse/instert', 'DashboardController@courseinsert')->name('insertcourse');

Route::get('deletecourse/{course_id}', 'DashboardController@deletecourse')->name('deletecoursefull');




