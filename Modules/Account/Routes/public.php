<?php

Route::middleware('auth')->group(function () {
    Route::get('account', 'AccountDashboardController@index')->name('account.dashboard.index');
    Route::get('account/profile', 'AccountProfileController@edit')->name('account.profile.edit');
    Route::put('account/profile', 'AccountProfileController@update')->name('account.profile.update');
    Route::get('account/orders', 'AccountOrderController@index')->name('account.orders.index');
    Route::get('account/orders/{id}', 'AccountOrderController@show')->name('account.orders.show');
    Route::get('account/wishlist', 'AccountWishlistController@index')->name('account.wishlist.index');
    Route::delete('account/wishlist/{productId}', 'AccountWishlistController@destroy')->name('account.wishlist.destroy');
    Route::get('account/reviews', 'AccountReviewController@index')->name('account.reviews.index');

    //Thingerbits Editing Core
    Route::get('account/coursexp', 'AccountDashboardController@coursefunction')->name('coursexp');
    Route::get('account/skill', 'AccountDashboardController@skillpane')->name('skillpane');
    Route::get('account/coursexp/{id}', 'AccountDashboardController@moreinfopopup')->name('moreinfopopup');

    //when enter a course 
    Route::get('account/skull/{sharp}/{apple}', 'AccountDashboardController@coursecenter')->name('entercourse');
   // Route::get('account/skull/rollingcontroller/entercourse/{core1}/{apple}', 'AccountDashboardController@lesson')->name('lessondone');


   // Route::get('account/{core1}/{core2}', 'AccountDashboardController@lesson')->name('lessoncontroler');

  // Route::get('account/skull/rollingcontroller/entercourse/{core}/{apple}', 'AccountDashboardController@lesson')->name('golesson');
  
  Route::get('account/core', 'ProductController@poengine')->name('poengine');

 

  Route::get('account/sft/course_img/{course_id}', 'Lmscontroller@getcourse_img')->name('getcourse_img');
  Route::get('account/sft/les_vid/{les_id}', 'Lmscontroller@getles_vid')->name('getles_vid');


  //LMS Hadling Pacmargin 
  //The besthing controller csharp

  Route::get('account/lms', 'Lmscontroller@getcourses')->name('getcourses_r');
  Route::get('account/lms/my_courses_getdata/', 'Lmscontroller@my_courses_getdata')->name('my_courses_getdata');
  Route::get('account/lms/my_courses/', 'Lmscontroller@my_courses')->name('my_courses');

  Route::get('account/lms/my_courses/course_open/{id}', 'Lmscontroller@course_open')->name('course_open');
  
  
  Route::get('account/lms/my_courses/course_open/lesson/{course_id}/{les_id}', 'Lmscontroller@lesson_iol')->name('lesson');
 
  Route::post('account/lms/my_course/insert', 'Lmscontroller@add_my_course')->name('add_my_course');

  Route::get('account/lms/my_courses/ajax/jsongetles/{lg_id}', 'Lmscontroller@jsongetles')->name('jsongetles');


  
});
