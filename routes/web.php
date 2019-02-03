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


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
Route::get('/order_admin','CoinController@order')->name('order_admin');
Route::get('/order_sell','CoinController@sell_order')->name('order_sell');
Route::get('/order_exchange','CoinController@exchange_order')->name('order_exchange');

Route::get('/order_approve/{order_id}','CoinController@approve')->name('order_admin');
Route::get('/order_destroy/{order_id}','CoinController@destroy')->name('order_cancle');
});
Route::get('/addstock','CoinController@addstock')->name('addstock');
Route::post('/store_stock','CoinController@stock_store')->name('store_stock');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/coin', 'HomeController@coin')->name('coin');
Route::get('/find/{name}', 'HomeController@find')->name('find');
Route::post('store', 'HomeController@store')->name('store');
Route::post('temp_order', 'HomeController@temporder')->name('temp_order');
Route::post('order', 'HomeController@order')->name('order');


//order
Route::get('/order_admin','CoinController@order')->name('order_admin');
Route::get('/order_approve/{order_id}','CoinController@approve')->name('order_admin');
Route::get('/order_destroy/{order_id}','CoinController@destroy')->name('order_cancle');

//order in admin panel
Route::get('/vendor/voyager/order_admin','CoinController@order')->name('order_adminmain');
Route::get('/vendor/voyager/order_approve/{order_id}','CoinController@approve')->name('order_admin');
Route::get('/vendor/voyager/order_destroy/{order_id}','CoinController@destroy')->name('order_cancle');

//transaction

Route::get('/buy', function () {
    return view('buy');
});
Route::get('/sell', function () {
    return view('sell');
});
Route::get('/exchange', function () {
    return view('exchange');
});








