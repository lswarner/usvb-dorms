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

Route::redirect('/', '/dorm/1');
Route::get('/dorm/{dorm}', 'AppController@dorm')->name('dorm-details');
Route::get('/student/{student}', 'AppController@student')->name('student-details');
Route::patch('/student/{student}', 'AppController@update_student')->name('student-update');
