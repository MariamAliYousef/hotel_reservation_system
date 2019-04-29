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
Route::get('/single_room', 'PagesController@showSingleRooms');
Route::get('/double_room', 'PagesController@showDoubleRooms');
Route::get('/triple_room', 'PagesController@showTripleRooms');
Route::get('/resturant', 'PagesController@showResturant');
Route::get('/golf', 'PagesController@showGolf');
Route::get('/gym', 'PagesController@showGym');
Route::get('/other_serv', 'PagesController@showOtherServ');

Route::get('/list-of-booking', 'adminController@listBooking')->name('list-of-booking');

Route::get('/controll', 'adminController@showAdminPage')->name('controll');

// Halls (admin)
Route::get('/admin_halls', 'adminController@showAdminHalls');
Route::post('/halls-store', 'adminController@hall_Store');
Route::get('/hall/{hall_id}/edit', 'adminController@hall_edit');
Route::put('/hall/{hall_id}/update', 'adminController@hall_update');
Route::get('/hall/{hall_id}/delete', 'adminController@hall_delete');


#Rooms (admin)
Route::get('/admin_rooms', 'adminController@showAdminRooms');
Route::post('/rooms-store', 'roomsController@room_Store');
Route::get('/room/{room_id}/edit', 'roomsController@room_edit');
Route::put('/room/{room_id}/update', 'roomsController@room_update');
Route::get('/room/{room_id}/delete', 'roomsController@room_delete');

//meals (admin)
Route::get('/admin_meals', 'adminController@showAdminMeals');
Route::post('/meals-store', 'mealsController@meal_Store');
Route::get('/meal/{meal_id}/edit', 'mealsController@meal_edit');
Route::put('/meal/{meal_id}/update', 'mealsController@meal_update');
Route::get('/meal/{meal_id}/delete', 'mealsController@meal_delete');



#Book Room
Route::post('/regist_room', 'bookRoomController@storeRoomBooking');
Route::get('/regist_room', 'bookRoomController@show')->name('regist_room');

//payment
Route::get('/payment', 'paymentController@showPaymentForm');
Route::post('/storePayment', 'paymentController@store_payment');




//reserve a table
Route::get('/table_form','pagesController@showTableForm');
Route::post('register_table', 'reserveController@registerTable');
Route::get('/donetable', function () {
    return view('pages.doneTable');
});

//reserve hall

Route::get('/halls_reg', 'pagesController@showHallForm');
Route::post('hall_Store', 'reserveController@hallStore');
Route::get('/done_reg_hall', function () {
    return view('pages.doneHall');
});
