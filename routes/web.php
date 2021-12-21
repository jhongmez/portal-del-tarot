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

// Autenticación
Auth::routes();

Route::resource('users', 'UserController');
Route::resource('headers', 'HeaderController');
Route::resource('services', 'ServiceController');
Route::resource('testimonials', 'TestimonialController');

Route::get('/home', 'HomeController@index')->name('home');
