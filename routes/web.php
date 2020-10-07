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

Route::get('/admin','HomeController@index')->name('admin.co_so_cc.pageName_list');
Route::post('/admin/save','HomeController@save')->name('admin.save');

Route::get('/admin/delete/{id}','HomeController@del')->name('admin.delete');

Route::get('/admin/update/{id}','HomeController@index')->name('admin.update');
Route::post('/admin/update/{id}','HomeController@update')->name('admin.update');

