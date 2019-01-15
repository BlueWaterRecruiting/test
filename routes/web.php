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
Route::get('/', 'pagescontroller@home');
Route::get('/Contact', 'pagescontroller@Contact');
Route::get('/About', 'pagescontroller@About');
Route::get('/candidatelogin', 'pagescontroller@candidatelogin');
Route::get('/Posting', 'pagescontroller@Posting');
Route::get('/clientportal', 'pagescontroller@clientportal');
Route::get('/amportal', 'pagescontroller@amportal');
