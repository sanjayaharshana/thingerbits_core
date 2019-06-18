<?php

use FleetCart\Course;

Route::get('install/pre-installation', 'InstallController@preInstallation');
Route::get('install/configuration', 'InstallController@getConfiguration');
Route::post('install/configuration', 'InstallController@postConfiguration');
Route::get('install/complete', 'InstallController@complete');


Route::get('test',function(){

    foreach (Course::get() as $row) {
        echo $row->course_id ." is purchased ".$row->isPurchased()."<br />";
    }
    // dd(Course::with('my_courses')->get()->toArray());
});