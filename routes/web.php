<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'WelcomeController@index')->name('welcome');


Auth::routes();



Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('user')->middleware('auth')->group(function () {
    Route::get('/', 'UserController@dashboard')->name('user.dashboard');
    Route::get('/', 'UserController@dashboard')->name('add-content');


});


Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', 'Admin\AdminController@dashboard')->name('admin.dashboard');
    Route::get('/all-users', 'Admin\AdminController@view')->name('admin.all-users');

});
