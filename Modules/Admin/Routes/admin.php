<?php

Route::get('/', 'DashboardController@index')->name('admin.dashboard.index');

Route::get('/sales-analytics', [
    'as' => 'admin.sales_analytics.index',
    'uses' => 'SalesAnalyticsController@index',
    'middleware' => 'can:admin.orders.index',
]);


//LMS Data
Route::get('/lessonpanel', 'lms@lessionpan')->name('lessonrout');
Route::get('/addlesson', 'lms@addles')->name('addlesson');
Route::post('/intertlesson', 'lms@insertlesson')->name('lessoninsert');
Route::get('/lessonpanel/{courseid}', 'lms@courseopener')->name('courseopenerrc');
Route::get('/parellel/{courseid}/{lessonid}', 'lms@lessoneditor')->name('lessonedit');
Route::post('/parellel/update', 'lms@updatelesson')->name('lesupdate');
Route::get('/parellel/delete/{valueid}', 'lms@deletelesson')->name('lesdelete');
Route::get('/addles/add/{cour_id}', 'lms@addlesson')->name('addlesadd');
Route::post('/addles/insert', 'lms@insertles')->name('adleson');
Route::get('/createcourse', 'lms@createcourse')->name('createcourserout');
Route::post('/createcourse/instert', 'lms@courseinsert')->name('insertcourse');
Route::get('deletecourse/{course_id}', 'lms@deletecourse')->name('deletecoursefull');

Route::get('courseuser_image/{course_id}', 'lms@courseuser_image');
Route::get('/course/img-upload', 'lms@imageUpload')->name('image.upload');
Route::post('/course/img-upload-post', 'lms@imageUploadPost')->name('image.upload.post');



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
Route::get('/purchase_oder', 'DashboardController@purchase_oder')->name('purchase_oder');
Route::get('/draft_oder', 'DashboardController@draft_oder')->name('draft_oder');
Route::post('/purchase_oder/update', 'DashboardController@save_po')->name('save_po');
Route::post('/purchase_oder/create_po', 'DashboardController@create_po')->name('create_po');
Route::get('/purchase_oder/create_po_return/{id}', 'DashboardController@purchase_oder_return')->name('purchase_oder_return');

//Route::post('/purchase_oder/create_po/insert', 'DashboardController@insertData')->name('insertData');

Route::post('/orderdata', 'DashBoardController@addpo_items');
Route::get('/orderdata/getdata/{id}', 'DashboardController@add_po_getdata')->name('add_po_getdata');
Route::get('/orderdata/delete/{id}', 'DashboardController@deletepo')->name('deletepo');
Route::delete('/orderdata/deleteitem/{id}', 'DashboardController@deleteitem')->name('deleteitem');







