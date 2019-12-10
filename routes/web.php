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

Route::get('/perfilGuardiao', "GuardianController@viewProfileGuardian");
Route::get('/perfilOng','NgoController@viewProfileNgo');
Route::get('/home',"SiteController@viewHome");
Route::get('/paginaAnimal', "PetController@viewPets");
Route::get('/anuncios',"AdController@viewAds");
Route::get('/chat', 'ChatController@viewChat');
Route::get('/busca', "SearchController@viewSearch");
Route::post('/busca', "SearchController@viewSearch");
Route::get('/cadastre-se', "RegisterController@viewRegister");
Route::get('/cadastroAnimal', "RegisterPetsController@viewRegisterPets");
Route::get('/cadastroAnuncio', "RegisterAdsController@viewRegisterAds");
Route::get('/cadastroGuardiao', "RegisterGuardianController@viewRegisterGuardian");
Route::get('/cadastroOng', "RegisterNgoController@viewRegisterNgo");
Route::get('/parceiros', "PartnersController@viewPartners");
Route::get('/sobre', "AboutController@viewAbout");
Route::get('/login', "LoginController@viewLogin");

/*FAZER A ROTA DE LOGIN CONFORME OS ARQUIVOS QUE O LARAVEL FORNECE */