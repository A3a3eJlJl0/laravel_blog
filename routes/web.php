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

Route::get('/', 'HomeController@showWelcome')->name('welcome');
Route::get('/request', 'HomeController@showDataUploadRequestForm')->name('data.upload.request.form');
Route::post('/request', 'HomeController@showDataUploadRequest')->name('data.upload.request');

Route::group(['prefix' => 'news'], function () {
    Route::get('add', 'NewsController@showAddForm')->name('news.add.form');
    Route::post('add', 'NewsController@add')->name('news.add');
    Route::get('/', 'NewsController@showCategories')->name('news.categories');
    Route::get('{category}/', 'NewsController@showAllFromCategory')->name('news.category');
    Route::get('{category}/{id}', 'NewsController@showDetail')->name('news.category.id');
});

Route::get('auth', 'AuthController@showForm')->name('auth.form');
Route::post('auth', 'AuthController@auth')->name('auth.auth');



