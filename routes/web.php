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
Route::get('/home', 'AdminController@home');
Route::get('/login', 'AdminController@login');
Route::post('/login', 'AdminController@postlogin');
Route::get('/logout', 'AuthController@logout');

Route::get('/cardata', 'AdminController@car');
Route::get('/addcar', 'AdminController@addcar');
Route::post('/addcar','AdminController@postcar');

Route::get('/buyer', 'AdminController@buyer');
Route::get('/addbuyer','AdminController@addbuyer');
Route::post('/addbuyer','AdminController@postbuyer');
Route::get('/buyer/{d_buyer}/delete', 'AdminController@delet');
