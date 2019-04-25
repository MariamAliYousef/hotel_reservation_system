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
<<<<<<< HEAD
//Route::post('/store_comment', 'PagesController@storeComment');
//Route::get('/show_comments', 'PagesController@showComments');
//Route::get('/admin_pages/list-of-booking', 'HomeController@listBooking')->name('list-of-booking');
//Route::post('/regist_room', 'bookRoomController@storeRoomBooking')->name('regist_room');
Route::post('/regist_room', 'bookRoomController@storeRoomBooking');
Route::get('/regist_room', 'bookRoomController@show')->name('regist_room');
=======
Route::post('/store_comment', 'PagesController@storeComment');
Route::get('/show_comments', 'PagesController@showComments');
Route::get('/halls', 'PagesController@showHalls');




Route::get('/controll', 'adminController@showAdminPage')->name('controll');
Route::get('/admin_halls', 'adminController@showAdminHalls');
Route::post('/halls-store', 'adminController@hall_Store');
Route::get('/hall/{hall_id}/edit', 'adminController@hall_edit');
Route::put('/hall/{hall_id}/update', 'adminController@hall_update');
Route::get('/hall/{hall_id}/delete', 'adminController@hall_delete');


>>>>>>> 42c1511bf491425fada61f49e1cbecb1fdc969ef
