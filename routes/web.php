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




Route::get('/controll', 'adminController@showAdminPage')->name('controll');
Route::get('/admin_halls', 'adminController@showAdminHalls');
Route::post('/halls-store', 'adminController@hall_Store');
Route::get('/hall/{hall_id}/edit', 'adminController@hall_edit');
Route::put('/hall/{hall_id}/update', 'adminController@hall_update');
Route::get('/hall/{hall_id}/delete', 'adminController@hall_delete');


