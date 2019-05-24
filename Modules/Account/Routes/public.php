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


  

  //LMS Hadling Pacmargin 
  //The besthing controller csharp

  Route::get('account/lms', 'Lmscontroller@getcourses')->name('getcourses');
  Route::get('account/sft/course_img/{course_id}', 'Lmscontroller@getcourse_img')->name('getcourse_img');
  Route::get('account/lms/my_courses/', 'Lmscontroller@my_courses')->name('my_courses');



});
