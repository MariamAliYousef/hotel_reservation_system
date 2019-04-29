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
    return view('Welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/store_comment', 'PagesController@storeComment');
Route::get('/show_comments', 'PagesController@showComments');
Route::get('/halls', 'PagesController@showHalls');
Route::get('/restaurants','pagesController@showRestaurants');


Route::get('/controll', 'adminController@showAdminPage')->name('controll');
Route::get('/admin_halls', 'adminController@showAdminHalls');
Route::post('/halls-store', 'adminController@hall_Store');
Route::get('/hall/{hall_id}/edit', 'adminController@hall_edit');
Route::put('/hall/{hall_id}/update', 'adminController@hall_update');
Route::get('/hall/{hall_id}/delete', 'adminController@hall_delete');



Route::post('/regist_room', 'bookRoomController@storeRoomBooking');
Route::get('/regist_room', 'bookRoomController@show')->name('regist_room');


Route::get('/payment', 'paymentController@showPaymentForm');
Route::post('/storePayment', 'paymentController@store_payment');

//reserve a table
Route::get('/register','pagesController@showRegister');
Route::post('register_table', 'reserveController@registerTable');
Route::get('/donetable', function () {
    return view('pages.doneTable');
});

//reserve hall
Route::get('/hallss', 'PagesController@showHalls2');
Route::get('/halls_reg', 'pagesController@showRegister');
Route::post('hall_Store', 'reserveController@hallStore');
Route::get('/done_reg_hall', function () {
    return view('pages.doneHall');
});