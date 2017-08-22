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
    return redirect('blog');
});

Route::group(['namespace' => 'Blog', 'prefix' => 'blog'], function () {
    Route::get('/', 'BlogController@index')->name('blog');
    Route::get('{slug}', 'BlogController@content');
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::get('/', 'PostController@index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
