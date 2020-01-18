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
Route::get('/guardiao/perfil/{id?}', "GuardianController@viewProfileGuardian");
Route::get('/cadastroGuardiao', "GuardianController@createGuardian");
Route::post('/cadastroGuardiao', "GuardianController@createGuardian");
Route::get('/guardiao/editar/{id?}', "GuardianController@formUpdate");
Route::post('/guardiao/editar', "GuardianController@storeUpdate");
Route::get('/guardiao/deletar/{id?}', "GuardianController@delete");

//Ngo´s Routes
Route::get('ong/perfil/{id?}','NgoController@viewProfileNgo');
Route::get('ong/cadastro', "NgoController@registerNgo");
Route::post('ong/cadastro', "NgoController@doRegisterNgo"); 
Route::get('ong/edita/{id?}',"NgoController@editNgo")->middleware('checkngo'); 
Route::post('ong/edita',"NgoController@doEditNgo");
Route::post('ong/deleta',"NgoController@deleteNgo");
Route::post('ong/visualizar',"NgoController@getNgo");
Route::get('ong/{id?}/minhaconta/pets',"NgoController@accountViewMyPets")->middleware('checkngo');



//Site´s Routes
Route::get('/home',"SiteController@viewHome");
Route::post('/home', "Auth\LoginController@login");
Route::get('/parceiros', "SiteController@viewPartners");
Route::get('/sobre', "SiteController@viewAbout");

//Pet´s Routes
Route::get('/pet/cadastro', "PetController@viewForm")->middleware('checkngo');
Route::post('/pet/cadastro', "PetController@register");
Route::get('/pet/atualizar/{id?}','PetController@viewFormUpdate');
Route::post('/pet/atualizar', "PetController@update");
Route::get('/pet/excluir/{id?}','PetController@delete');
Route::get('/pet/perfil/{id?}', "PetController@viewPetProfile");
Route::get('/pets', "PetController@viewAllPets");

//Ad´s Routes
Route::get('/anuncios',"AdController@viewAllAds");
Route::post('/anuncios',"AdController@create");
Route::get('/anuncios/cadastro', "AdController@viewRegisterAds");
Route::get('/anuncios/editar/{id?}', "AdController@viewFormUpdate");
Route::post('/anuncios/editar', "AdController@update");
Route::get('/anuncios/meus-anuncios', "AdController@viewMyAds");

//Chat´s Routes
Route::get('/chat', 'ChatController@viewChat');

//Search´s Routes
Route::get('/busca', "SearchController@viewSearch");
Route::post('/busca', "SearchController@viewSearch");

//Register´s Route
Route::get('/cadastre-se', "RegisterController@viewRegister");

//Login´s Route
Route::get('/login', "Auth\LoginController@viewLogin");
Route::post('/login', "Auth\LoginController@login"); //ROTA POST LOGIN. VER PARA ONDE DIRECIONAR (NAT/VITOR)

//Admin´s Routes
Route::get('/admin/cadastro', "AdminController@createAdmin");
Route::post('/admin/cadastro', "AdminController@createAdmin");
Route::get('/admin/atualizar/{id?}', "AdminController@updateAdmin")->middleware('checkuser');
Route::post('/admin/atualizar', "AdminController@updateAdmin"); 
Route::get('/admin/deletar/{id?}',"AdminController@deleteAdmin")->middleware('checkuser'); 
Route::get('/admin', "AdminController@viewAllAdmin")->middleware('checkuser'); 

/*FAZER A ROTA DE LOGIN CONFORME OS ARQUIVOS QUE O LARAVEL FORNECE */
