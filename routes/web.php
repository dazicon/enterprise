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

//Route::get('/', function () {return view('welcome');});

Route::get('/','PagesController@index')->name('index');
Route::get('/contact','PagesController@contact')->name('contact');

Route::get('/about','PagesController@about')->name('about');

Route::get('/news','PagesController@news')->name('news');
Route::get('/news-show','PagesController@newsShow')->name('news-show');

Route::get('/product','PagesController@product')->name('product');

Route::get('/solution','PagesController@solution')->name('solution');
Route::get('/solution-show','PagesController@solutionShow')->name('solution-show');