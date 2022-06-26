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
})->name('welcome');

Route::get('about', 'App\Http\Controllers\PageController@about')->name('page.about');

Route::get('rating', 'App\Http\Controllers\RatingController@index')->name('rating.index');

Route::get('articles', 'App\Http\Controllers\ArticleController@index')->name('articles.index');

Route::get('articles/create', 'App\Http\Controllers\ArticleController@create')->name('articles.create');

Route::post('articles', 'App\Http\Controllers\ArticleController@store')->name('articles.store');

Route::get('articles/{id}', 'App\Http\Controllers\ArticleController@show')->name('articles.show');
