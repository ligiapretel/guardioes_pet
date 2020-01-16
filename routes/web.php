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
    return view('home');
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
Route::get('/pet/cadastro', "PetController@viewForm"); //precisa colocar o middleware
Route::post('/pet/cadastro', "PetController@register");
Route::get('/pet/atualizar/{id?}','PetController@viewFormUpdate');
Route::post('/pet/atualizar', "PetController@update");
Route::get('/pet/excluir/{id?}','PetController@delete');
Route::get('/pet/perfil/{id?}', "PetController@viewPetProfile");
//Route::get('/pets', "PetController@viewAllPets");

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
Route::get('/admin/atualizar/{id?}', "AdminController@viewUpdateAdmin");
Route::post('/admin/atualizar', "AdminController@updateAdmin"); // Dúvida: é possível usar o mesmo método em rotas parametrizadas?
Route::post('/admin/deletar/{id?}',"AdminController@deleteAdmin"); 
Route::get('/admin', "AdminController@viewAllAdmin"); 

/*FAZER A ROTA DE LOGIN CONFORME OS ARQUIVOS QUE O LARAVEL FORNECE */