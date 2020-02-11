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


//Guardian´s Routes
Route::group(['prefix'=>'guardiao'], function(){
    Route::get('/perfil/{id?}', "GuardianController@viewProfileGuardian");
    Route::get('/minhaconta/perfil/{id}', "GuardianController@viewMyAccountGuardian")->middleware('checkguardian');
    Route::get('/cadastrar', "GuardianController@createGuardian");
    Route::post('/cadastrar', "GuardianController@createGuardian");
    Route::get('/editar/{id?}', "GuardianController@formUpdate")->middleware('checkguardian');
    Route::post('/editar', "GuardianController@storeUpdate");
    Route::get('/deletar/{id?}', "GuardianController@delete")->middleware('checkguardian');
    Route::get('/guardioes', "GuardianController@viewAllGuardians");
    Route::get('/lista', "GuardianController@listAllGuardians");
});

//Rotas para marcar o pet como adotado, lar ou apadrinhado
Route::post('/pet/perfil/adotar/{id?}', "GuardianController@createAdoption")->middleware('checkguardian');
Route::post('/pet/perfil/lar/{id?}', "GuardianController@createHome")->middleware('checkguardian');
Route::post('/pet/perfil/apadrinhar/{id?}', "GuardianController@createSponsor")->middleware('checkguardian');

//Ngo´s Routes
Route::group(['prefix' => 'ong'], function () {
Route::get('/perfil/{id?}','NgoController@viewProfileNgo');
Route::get('/cadastro', "NgoController@registerNgo");
Route::post('/cadastro', "NgoController@doRegisterNgo"); 
Route::get('/edita/{id?}',"NgoController@editNgo")->middleware('checkngo')->name('editarOng'); 
Route::post('/edita',"NgoController@doEditNgo");
Route::post('/deleta',"NgoController@deleteNgo");
Route::post('/visualizar',"NgoController@getNgo");
Route::get('/minhaconta/pets',"NgoController@accountViewMyPets")->middleware('checkngo');
});

//Site´s Routes
Route::get('/home',"SiteController@viewHome");
Route::get('/',"SiteController@viewHome");
Route::get('/parceiros', "SiteController@viewPartners");
Route::get('/sobre', "SiteController@viewAbout");

//Login´s Route
Route::get('/login', "Auth\LoginController@viewLogin")->name('login');
Route::post('/login', "Auth\LoginController@login");
Route::post('/logout', "Auth\LoginController@logout");

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
Route::get('/busca', "SearchController@search");

//Register´s Route
Route::get('/cadastre-se', "RegisterController@viewRegister");

//Admin´s Routes
Route::group(['prefix'=>'admin'], function(){
    Route::get('/cadastro', "AdminController@createAdmin")->middleware('checkadmin');
    Route::post('/cadastro', "AdminController@createAdmin");
    Route::get('/atualizar/{id?}', "AdminController@updateAdmin")->middleware('checkadmin');
    Route::post('/atualizar', "AdminController@updateAdmin"); 
    Route::get('/deletar/{id?}',"AdminController@deleteAdmin")->middleware('checkadmin');
    Route::get('/', "AdminController@viewAllAdmin")->middleware('checkadmin');
    Route::get('/guardiao', "AdminController@viewAllGuardian")->middleware('checkadmin');
    Route::get('/guardiao/atualizar/{id?}', "AdminController@updateGuardian")->middleware('checkadmin');
    Route::post('/guardiao/atualizar', "AdminController@updateGuardian");
    Route::get('/ong', "AdminController@viewAllNgo")->middleware('checkadmin');
    Route::get('/ong/atualizar/{id?}', "AdminController@updateNgo")->middleware('checkadmin');
    Route::post('/ong/atualizar', "AdminController@updateNgo");
});



