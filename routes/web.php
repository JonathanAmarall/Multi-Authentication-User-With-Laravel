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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'costumer'], function() {
    Route::get('/cliente/password/reset','Costumer\ForgotPasswordController@showLinkRequestForm')->name('cliente.password.request');
    Route::post('/cliente/password/email','Costumer\ForgotPasswordController@sendResetLinkEmail')->name('cliente.password.email');
    Route::get("/cliente/entrar", 'Costumer\LoginController@showLoginForm')->name('logar');
    Route::post("/cliente/entrar", 'Costumer\LoginController@logar');
    Route::get('/cliente/sair', 'Costumer\LoginController@logout');

        Route::get('/cliente/dashboard', 'Costumer\HomeController@index')->name('cliente.dashboard');
});











Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
Route::get('/', function () {
    return view('home');
});