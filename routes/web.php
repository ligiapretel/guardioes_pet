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
Route::group(['prefix'=>'guardiao'], function(){
    Route::get('/perfil/{id?}', "GuardianController@viewProfileGuardian");
    Route::get('/minhaconta/perfil/{id}', "GuardianController@viewMyAccountGuardian");
    Route::get('/cadastrar', "GuardianController@createGuardian");
    Route::post('/cadastrar', "GuardianController@createGuardian");
    Route::get('/editar/{id?}', "GuardianController@formUpdate");
    Route::post('/editar', "GuardianController@storeUpdate");
    Route::get('/deletar/{id?}', "GuardianController@delete");
    Route::get('/guardioes', "GuardianController@viewAllGuardians");
    Route::get('/lista', "GuardianController@listAllGuardians");
});

//Rotas para marcar o pet como adotado, lar ou apadrinhado
Route::get('/pet/perfil/adotar/{id?}', "GuardianController@createAdoption");
Route::get('/pet/perfil/lar/{id?}', "GuardianController@createHome");
Route::get('/pet/perfil/apadrinhar/{id?}', "GuardianController@createSponsor");

//Ngo´s Routes
Route::group(['prefix' => 'ong'], function () {
Route::get('/perfil/{id?}','NgoController@viewProfileNgo');
Route::get('/cadastro', "NgoController@registerNgo");
Route::post('/cadastro', "NgoController@doRegisterNgo"); 
Route::get('/edita/{id?}',"NgoController@editNgo")->middleware('checkngo'); 
Route::post('/edita',"NgoController@doEditNgo");
Route::post('/deleta',"NgoController@deleteNgo");
Route::post('/visualizar',"NgoController@getNgo");
Route::get('/minhaconta/pets',"NgoController@accountViewMyPets")->middleware('checkngo');
});


//Site´s Routes
Route::get('/home',"SiteController@viewHome");
Route::post('/home', "Auth\LoginController@login");
Route::get('/parceiros', "SiteController@viewPartners");
Route::get('/sobre', "SiteController@viewAbout");

//Pet´s Routes
Route::get('/pet/cadastro', "PetController@viewForm")->middleware('checkngo');
Route::post('/pet/cadastro', "PetController@register")->middleware('checkngo');
Route::get('/pet/atualizar/{id?}','PetController@viewFormUpdate')->middleware('checkngo');
Route::post('/pet/atualizar/{id?}', "PetController@update")->middleware('checkngo');
Route::get('/pet/excluir/{id?}','PetController@delete')->middleware('checkngo');
Route::get('/pet/perfil/{id?}', "PetController@viewPetProfile");
Route::get('/pets', "PetController@viewAllPets");

//Ad´s Routes
Route::get('/anuncios',"AdController@viewAllAds");
Route::post('/anuncios',"AdController@create");
Route::get('/anuncios/cadastro', "AdController@viewRegisterAds")->middleware('checkuser');
Route::get('/anuncios/editar/{id?}', "AdController@viewFormUpdate")->middleware('checkuser');
Route::post('/anuncios/editar', "AdController@update");
Route::get('/anuncios/deletar/{id?}', "AdController@delete")->middleware('checkuser');
Route::get('/anuncios/meus-anuncios', "AdController@viewMyAds")->middleware('checkuser');

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
Route::post('/logout', "Auth\LoginController@logout");

//Admin´s Routes
Route::get('/admin/cadastro', "AdminController@createAdmin");
Route::post('/admin/cadastro', "AdminController@createAdmin");
Route::get('/admin/atualizar/{id?}', "AdminController@updateAdmin")->middleware('checkuser');
Route::post('/admin/atualizar', "AdminController@updateAdmin"); 
Route::get('/admin/deletar/{id?}',"AdminController@deleteAdmin")->middleware('checkuser'); 
Route::get('/admin', "AdminController@viewAllAdmin")->middleware('checkuser'); 


