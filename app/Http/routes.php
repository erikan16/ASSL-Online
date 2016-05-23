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

Route::auth();

Route::get('/', 'PagesController@getIndex');

// Authentication Routes
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration Routes
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


//parent dashboard
Route::get('parent/welcome', 'PagesController@getParent');
Route::get('/parent/class_room', 'ParentController@getPosts');
Route::get('/parent/teacher_communication', 'ParentController@getCommunication');
Route::get('/parent/school_news', 'ParentController@getNews');
Route::get('/parent/tutorial', 'ParentController@getTutorials');
Route::get('parent/{slug}', ['as' => 'post.single', 'uses' => 'ParentController@getPost'])
    ->where('slug', '[\w\d\-\_]+');
//teacher dashboard
Route::get('/teacher/welcome', 'PagesController@getTeacher');
Route::get('/about',  'PagesController@getAbout');
Route::get('/contact', 'PagesController@getContact');
Route::resource('posts', 'TeacherPostController');
Route::resource('assignments', 'AssignmentController');
