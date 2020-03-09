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

// Frontend Page Routes
Route::get('/', 'PagesController@home')->name('pages.home');
Route::get('/about', 'PagesController@about')->name('pages.about');
Route::get('/events', 'PagesController@events')->name('pages.events');
Route::get('/gallery', 'PagesController@gallery')->name('pages.gallery');
Route::get('/booking', 'PagesController@booking')->name('pages.booking');
Route::get('/contact', 'PagesController@contact')->name('pages.contact');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

