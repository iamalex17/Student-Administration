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
*/

Route::group(['middleware' => ['web']], function () {
    Route::auth();

    // get routes
    Route::get('/', 'HomeController@index');
    Route::get('/dashboard', 'DashboardController@index');
    Route::get('/login', 'LoginController@index');
    Route::get('/register', 'RegisterController@index');

    // post routes
    Route::post('/class/create', 'ClassController@store');
    Route::post('/student/create', 'StudentController@store');
    Route::post('/grade/create', 'GradeController@store');

    // update routes
    Route::put('/class/update', 'ClassController@update');
    Route::put('/student/update', 'StudentController@update');
    Route::put('/grade/update', 'GradeController@update');
});
