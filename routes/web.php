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

Route::get('/', function() {
    return view('welcome');
});
Route::get('/home',"SiteController@viewHome");

Route::get('/Pets/paginaAnimal', "PetController@viewPaginaAnimal");
Route::get('/ads',"AdController@viewAds");
Route::get('/chat', 'ChatController@viewChat');
Route::get('/login', "LoginController@viewLogin");
Route::get('/Pets/paginaAnimal', "PetController@viewPaginaAnimal");
