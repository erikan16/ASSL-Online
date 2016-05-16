<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|

//Route::group(['middleware' => ['web']], function () {
//
//});
*/

//primary login
Route::get('/', 'PagesController@getIndex');
//parent dashboard
Route::get('/parent/welcome', 'PagesController@getParent');
//teacher dashboard
Route::get('/teacher/welcome', 'PagesController@getTeacher');
Route::get('/about',  'PagesController@getAbout');
Route::get('/contact', 'PagesController@getContact');
Route::resource('posts', 'TeacherPostController');
Route::resource('assignments', 'AssignmentController');