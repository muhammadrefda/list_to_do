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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();
Route::group(['middleware' => ['auth']] ,function(){


 Route::get('/home', 'HomeController@index')->name('home');

// category
Route::get('category' , 'Category\WebCategoryController@index');
Route::get('category/{id}/edit' , 'Category\WebCategoryController@edit');
Route::patch('category/{id}' , 'Category\WebCategoryController@update');
Route::delete('category/{id}' , 'Category\WebCategoryController@delete');
});