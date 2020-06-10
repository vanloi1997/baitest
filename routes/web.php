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
Route::get('/','AdminCategoryController@index')->name('admin.list.category');
Route::get('/create','AdminCategoryController@create')->name('admin.create.category');
Route::post('/create','AdminCategoryController@store');