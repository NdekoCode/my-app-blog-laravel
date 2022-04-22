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

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@home');
Route::get('/contact', 'ContactController@contact');
Route::get('/about', 'AboutController@about');
Route::get('/posts', 'PostsController@index');
// Route::resource('NomTable','ControllerNameOfTable') ,Ainsi on aura une liste des routes basés sur la ressource 'posts'
Route::resource('posts', 'PostsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
