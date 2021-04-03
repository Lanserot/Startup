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

Route::get('/', 'PostController@index');

Route::group(['prefix' => 'vacancy'], function (){
    Route::get('/', 'PostController@posts')->name('vacancy');
    Route::get('/new', 'PostController@new')->name('new.vacancy');
    Route::post('/new', 'PostController@create')->name('create.vacancy');
    Route::get('/{id}', 'PostController@view')->name('view.vacancy');
});

Route::group(['prefix' => 'resume'], function (){
    Route::get('/', 'PostController@posts')->name('resume');
    Route::get('/new', 'PostController@new')->name('new.resume');
    Route::post('/new', 'PostController@create')->name('create.resume');
    Route::get('/{id}', 'PostController@view')->name('view.resume');
});

Route::group(['prefix' => 'profiles'], function (){
    Route::get('/', 'UserController@index');
    Route::get('/{id}', 'UserController@view');
});

Route::group(['prefix' => 'register'], function (){
    Route::get('/', 'RegisterController@index')->name('register');
    Route::post('/', 'RegisterController@register');
});

Route::group(['prefix' => 'login'], function (){
    Route::get('/', 'LoginController@index')->name('login');
    Route::post('/', 'LoginController@login');
});

Route::get('/me', 'MeController@index');
Route::get('/my-posts', 'MeController@posts');


Route::get('/chats', 'ChatController@index');

Route::get('/donate', 'DonateController@index');
