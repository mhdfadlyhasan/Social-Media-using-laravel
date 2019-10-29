<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/home','HomeController@index');

Route::get('/p/create','PostsController@create');

Route::get('/p/{post}','PostsController@show');

Route::post('/p','PostsController@store');

Route::get('/profile/{user}', 'profileController@index')->name('profile/show');

Route::get('/profile/{user}/edit', 'profileController@edit')->name('profile/edit');

Route::patch('/profile/{user}', 'profileController@update')->name('profile/update');