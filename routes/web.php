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
    return view('index');
});


Auth::routes();
Route::group(['middleware' => ['auth']] ,function(){


 Route::get('/home', 'HomeController@index')->name('home');


    //users
Route::get('/datauser' , 'User\WebUserController@index');

// category
Route::get('category' , 'Category\WebCategoryController@index');
Route::post('category/tambah' , 'Category\WebCategoryController@store');
Route::get('category/{id}/edit' , 'Category\WebCategoryController@edit');
Route::patch('category/{id}' , 'Category\WebCategoryController@update');
Route::delete('category/{id}' , 'Category\WebCategoryController@delete');
});