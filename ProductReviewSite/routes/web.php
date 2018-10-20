<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::get('product','ProductController@index');

Route::get('{id}', 'ProductController@phoneDetails');

Route::get('harsh/gaikwad' , 'ProductController@runPython');

Route::post('{id}/review', 'ProductReviewController@insertPhoneReview');

// Route::get('product', 'ProductController@show');


// Route::get('product/{id}', 'ProductController@PhoneDetails');
