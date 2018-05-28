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
    return view('welcome');
});

Route::get('/home','pagesController@home');
Route::get('/about','pagesController@about');
Route::get('/contact','pagesController@contact');

Route::get('/posts','postsController@posts');
Route::get('/post/{id}','postsController@post');
Route::post('/posts','postsController@store')->name('store');;


Route::get('/message','messagesController@getMessages');
Route::post('/contact','messagesController@submit')->name('submit');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
