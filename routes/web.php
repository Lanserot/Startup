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
Route::get('/vacancies', function () {
    return view('welcome');
});
Route::get('/me', function () {
    return view('welcome');
});
Route::get('/my-posts', function () {
    return view('welcome');
});
Route::get('/chats', function () {
    return view('welcome');
});
Route::get('/new-vacancy', function () {
    return view('welcome');
});
Route::get('/new-resume', function () {
    return view('welcome');
});
Route::get('/donate', function () {
    return view('welcome');
});
Route::get('/vacancies/{id}', function ($id) {
    return view('welcome');
});
Route::get('/profiles', function () {
    return view('welcome');
});
Route::get('/profiles/{id}', function ($id) {
    return view('welcome');
});
Route::get('/resumes', function () {
    return view('welcome');
});
Route::get('/resumes/{id}', function ($id) {
    return view('welcome');
});
