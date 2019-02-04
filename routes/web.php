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

//Route::get('/', function () {
  //  return view('welcome');
//});

Auth::routes();


//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'PublicPageController@getLanding')->name('landing');
Route::get('/jobs', 'PublicPageController@getJobs')->name('jobs');
Route::get('/services', 'PublicPageController@getServices')->name('services');
Route::get('/about-us', 'PublicPageController@getAbout')->name('about');
Route::get('/contact-us', 'PublicPageController@getContact')->name('contact');
