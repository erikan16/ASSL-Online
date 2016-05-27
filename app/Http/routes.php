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

// tried to upload files 
// Tutorials Routes
//Route::get('/teacher/tutorials', 'TutorialsController@index');
//Route::post('/teacher/add', 'TutorialsController@uploadFiles');

// Authentication Routes
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

//Registration Routes
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Password Reset Routes
Route::get('password/reset/{token?} ', 'Auth\PasswordController@showResetForm');
Route::post('password/email', 'Auth\PasswordController@sendResetLinkEmail');

//parent dashboard
Route::get('/parent/welcome', 'PagesController@getIndex');
Route::get('/parent/class_room', 'ParentController@getPosts');
Route::get('/parent/teacher_communication', 'ParentController@getCommunications');
Route::get('/parent/tutorial', 'ParentController@getTutorials');
Route::get('/parent/communication/{slug}', ['as' => 'assignment.single', 'uses' => 'ParentController@getCommunication'])
    ->where('slug', '[\w\d\-\_]+');
Route::get('/parent/post/{slug}', ['as' => 'post.single', 'uses' => 'ParentController@getPost'])
    ->where('slug', '[\w\d\-\_]+');
Route::get('/parent/tutorial/{slug}', ['as' => 'post.single', 'uses' => 'ParentController@getTutorial'])
    ->where('slug', '[\w\d\-\_]+');


//teacher dashboard
Route::get('/teacher/welcome', 'PagesController@getIndex');
Route::resource('posts', 'TeacherPostController');
Route::resource('assignments', 'AssignmentController');
Route::resource('tutorials', 'TutorialsController');