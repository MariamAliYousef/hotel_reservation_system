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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::post('/store_comment', 'PagesController@storeComment');
//Route::get('/show_comments', 'PagesController@showComments');
//Route::get('/admin_pages/list-of-booking', 'HomeController@listBooking')->name('list-of-booking');
//Route::post('/regist_room', 'bookRoomController@storeRoomBooking')->name('regist_room');
Route::post('/regist_room', 'bookRoomController@storeRoomBooking');
Route::get('/regist_room', 'bookRoomController@show')->name('regist_room');
