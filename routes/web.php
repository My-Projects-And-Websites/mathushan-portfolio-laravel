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

Route::get('/', 'App\Http\Controllers\PagesController@index');
Route::get('/services', 'App\Http\Controllers\PagesController@services');
Route::get('/about', 'App\Http\Controllers\PagesController@about');
Route::get('/cv', 'App\Http\Controllers\PagesController@cv');
Route::get('/contact', 'App\Http\Controllers\PagesController@contact');
Route::get('/pg', 'App\Http\Controllers\PagesController@pg');

Route::get('/instagram', 'App\Http\Controllers\SocialPlatsController@instagram');
Route::get('/linkedin', 'App\Http\Controllers\SocialPlatsController@linkedin');
Route::get('/twitter', 'App\Http\Controllers\SocialPlatsController@twitter');

Route::post('/message', 'App\Http\Controllers\UserMessagesController@store');