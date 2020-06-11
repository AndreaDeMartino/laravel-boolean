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

/****************************************************
* STATIC PAGES
****************************************************/

// Home //
Route::get('/', 'StaticPageController@index')->name('static-page.home');
// Privacy //
Route::get('/privacy', 'StaticPageController@privacy')->name('static-page.privacy');
// Faq //
Route::get('/faq', 'StaticPageController@faq')->name('static-page.faq');

/****************************************************
* STUDENT PAGES
****************************************************/

// Student List //
Route::get('/students','StudentController@index')->name('student.index');
// Student Info //
Route::get('/students/show/{id}','StudentController@show')->name('student.show');