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



//Pack Production Generation Route
Route::get('/packgenerator', 'DashboardController@packgenerator')->name('packgenerator');
Route::get('/createpackage', 'DashboardController@createpackage')->name('createpackage');
Route::post('/createpackage/instert', 'DashboardController@createpackageinsert')->name('createpackageinsert');

Route::get('/addpackitems', 'DashboardController@addpackitems')->name('addpackitems');

Route::get('/packagercreator/{packid}/{productid}', 'DashboardController@addpackitems')->name('packitems');
Route::get('/insertitems/{packid}/{productid}', 'DashboardController@insertitems')->name('insertitemse');

Route::post('/additem', 'DashboardController@postadditem')->name('insertadditemr');
Route::get('/deleteitem/{productidt}', 'DashboardController@deletepack')->name('deletepack');

Route::get('/editpack/{pack_id}/{productid}', 'DashboardController@editpack')->name('editpacker');


Route::post('/editpack_save', 'DashboardController@editpack_save')->name('editpacker_save');

Route::get('/deletepol/{productidt}', 'DashboardController@deletepol')->name('deletepoler');

Route::get('/edit_tem/{productidt}', 'DashboardController@edititems')->name('edititems');


//Staff Profile Routes
Route::get('/staff_admin', 'DashboardController@staff_admin')->name('staff_adminer');







