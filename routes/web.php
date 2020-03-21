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

Route::get('/', 'LoginController@isLogin');

//Authentication
Route::prefix('/auth')->group(function(){
    //Login
    Route::get('/login', 'LoginController@loginPage');
    //Authenticate
    Route::post('/login', 'LoginController@authenticate');
});

Route::prefix('/stock-management')->group(function(){

});


//View Only
Route::view('/home', 'dashboard/home');

Route::get('/testGuzzle', 'TestController@get');

