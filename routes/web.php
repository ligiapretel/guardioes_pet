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

//Guardian´s Routes
Route::get('/perfilGuardiao', "GuardianController@viewProfileGuardian");
Route::get('/cadastroGuardiao', "RegisterGuardianController@viewRegisterGuardian");

//Ngo´s Routes
Route::get('/perfilOng/{id?}','NgoController@viewProfileNgo');
Route::get('/cadastroOng', "NgoController@registerNgo");
Route::post('/cadastroOng', "NgoController@doRegisterNgo"); 
Route::get('/editaOng/{id?}',"NgoController@editNgo"); 
Route::post('/editaOng',"NgoController@doEditNgo");
Route::post('/deletaOng',"NgoController@deleteNgo");
Route::post('/visualizarOng',"NgoController@getNgo");


//Site´s Routes
Route::get('/home',"SiteController@viewHome");
Route::get('/parceiros', "SiteController@viewPartners");
Route::get('/sobre', "SiteController@viewAbout");

//Pet´s Routes
Route::get('/paginaAnimal', "PetController@viewPets");
Route::get('/pet/cadastro', "PetController@viewForm"); //precisa colocar o middleware
Route::post('/pet/cadastro', "PetController@register");
//Route::post('/pet/cadastro', "PetController@savePicture"); 

//Ad´s Routes
Route::get('/anuncios',"AdController@viewAds");
Route::post('/anuncios',"AdController@create");
Route::get('/cadastroAnuncio', "AdController@viewRegisterAds");

//Chat´s Routes
Route::get('/chat', 'ChatController@viewChat');

//Search´s Routes
Route::get('/busca', "SearchController@viewSearch");
Route::post('/busca', "SearchController@viewSearch");

//Register´s Route
Route::get('/cadastre-se', "RegisterController@viewRegister");

//Login´s Route
Route::get('/login', "LoginController@viewLogin");

//Admin´s Routes
Route::get('/admin/cadastro', "AdminController@createAdmin");
Route::post('/admin/cadastro', "AdminController@createAdmin");
Route::get('/admin/atualizar/{id?}', "AdminController@updateAdmin");
Route::post('/admin/atualizar', "AdminController@updateAdmin"); // SE USAR O MESMO MÉTODO, COMO FICA O {ID?}?
Route::post('/admin/deletar/{id?}',"AdminController@deleteAdmin"); // PRECISA DE {ID?}????
Route::get('/admin', "AdminController@viewAllAdmin"); // visualização da lista de todos os admin
// Route::get('/admin/{id?}','AdminController@viewOneAdmin'); VALE A PENA TER UM VISUALIZAÇÃO DE UM ÚNICO ADMIN SENDO QUE SÃO POUCAS INFORMAÇÕES DE CADA UM?

/*FAZER A ROTA DE LOGIN CONFORME OS ARQUIVOS QUE O LARAVEL FORNECE */