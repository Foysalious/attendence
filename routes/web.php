<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users', 'UserController@index')->name('user-list');
Route::post('/register-user', 'UserController@createUser')->name('register-user');
Route::post('/delete-user/{user:id}', 'UserController@destroy')->name('delete-user');
Route::post('/update-user/{user:id}', 'UserController@update')->name('update-user');
Route::post('/attendence', 'AttendenceController@index')->name('attendence');
