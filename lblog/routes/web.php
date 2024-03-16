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

Route::get('/', '\App\Http\Controllers\SubscriberController@index')->name('home');

Route::get('/subscribe', '\App\Http\Controllers\SubscriberController@subscribe')->name('subscribe');

Route::post('/store', '\App\Http\Controllers\SubscriberController@store')->name('store');

Route::get('/edit/{id}', '\App\Http\Controllers\SubscriberController@edit')->name('edit');

Route::post('/update/{id}', '\App\Http\Controllers\SubscriberController@update')->name('update');

Route::delete('/delete/{id}', '\App\Http\Controllers\SubscriberController@delete')->name('delete');

Route::get('/dashboard/{id}', '\App\Http\Controllers\SubscriberController@dashboard')->name('dashboard');

Route::get('/admin', '\App\Http\Controllers\SubscriberController@admin')->name('admin');

Route::get('/admin/search', '\App\Http\Controllers\SubscriberController@search')->name('admin.search');

Route::get('/fillSubForm', '\App\Http\Controllers\SubscriberController@fillSubForm')->name('fillSubForm');


?>
