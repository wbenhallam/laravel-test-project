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

Route::get('/', function () {
    //return view('welcome');
    return 'This is the homestead app';
});


Route::get('about','PagesController@about');
Route::get('contact','PagesController@contact');


/*Route::get('wells','WellsController@index');
Route::get('wells/create','WellsController@create');
Route::get('wells/{id}','WellsController@show');
Route::post('wells','WellsController@store');
Route::get('wells/{id}/edit','WellsController@edit');*/



Route::resource('wells', 'WellsController');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController'
]);