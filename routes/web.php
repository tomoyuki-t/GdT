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

Route::get('/', 'App\Http\Controllers\PostsController@index')->name('top');
Route::resource('posts', 'App\Http\Controllers\PostsController');
Route::resource('users', 'App\Http\Controllers\UsersController')->only(['show']);
Route::resource('applicants', 'App\Http\Controllers\ApplicantsController')->only(['store']);
Route::resource('messages', 'App\Http\Controllers\MessagesController')->only(['show', 'store']);

//Route::get('/', function () {
    //return view('welcome');
//});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
