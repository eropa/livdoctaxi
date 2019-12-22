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
    return view('front.index');
});


//Auth::routes();
//Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');



Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function () {
    Route::prefix('upanel')->group(function () {
        // Главная в админике
        Route::get('/', function () {
            return view('back.index');
        })->name('upanel.index');


        // Пользователи
        Route::get('/users','UserController@index')->name('user.index');
        Route::get('/users/create','UserController@create')->name('user.create');
        Route::post('/users/create','UserController@store')->name('user.store');
        Route::get('/users/delete/{id?}','UserController@delete')->name('user.delete');
        Route::get('/users/edit/{id?}','UserController@edit')->name('user.edit');
        Route::post('/users/update','UserController@update')->name('user.update');
        Route::post('/users/updatepassword','UserController@updatePassword')->name('user.updatepassword');
    });
});