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

Route::get('موتورسیکلت-ها', 'MotorbikeController@pubMotorbikeIndex')->name('pubmotorbike.index');
Route::get('موتورسیکلت/{model}', 'MotorbikeController@pubMotorbikeShow')->name('pubmotorbike.show');
Route::resource('motorbikes', 'MotorbikeController', ['except' => ['edit'. 'update']]);