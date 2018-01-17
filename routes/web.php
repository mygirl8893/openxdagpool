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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/pages/{page}', 'PagesController@index')->name('pages')->where('page', '(.+)');

Route::get('/user/miners', 'User\MinersController@index')->name('miners');
Route::post('/user/miners', 'User\MinersController@create')->name('miners.create');
Route::delete('/user/miners', 'User\MinersController@delete')->name('miners.delete');
Route::post('/user/miners/alerts', 'User\MinersController@alerts')->name('miners.alerts');

// API call, uses the same authentication as web interface
Route::post('/api/miners', 'Api\MinersController@list')->name('api.miners');

Route::get('/user/profile', 'User\ProfileController@index')->name('profile');
Route::post('/user/profile', 'User\ProfileController@update')->name('profile.update');

