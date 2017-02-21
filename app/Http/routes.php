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
    return view('welcome');
});
//Route::get('/','StaticPagesController@home');
//Route::get('/help','StaticPagesController@help');
//Route::get('/about','StaticPagesController@about');
Route::get('/help','StaticPagesController@help')->name('help');
Route::get('/','StaticPagesController@home')->name('home');
Route::get('/about','StaticPagesController@about')->name('about');

Route::get('signup','UserController@create')->name('signup');
resource('users','UserController');

Route::get('login','SessionsController@create')->name('login');
Route::post('login','SessionsController@store')->name('login');
delete('logout','SessionsController@destroy')->name('logout');
