@extends('layouts.templateMenuLateral')

@section('title')
    Guardiões Pet | Minha Conta
@endsection

@section('content') 

<section  class="container-fluid col-8" id="pfG_cx_info_principal"> 
    @if(isset($profile))
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 d-flex justify-content-center">
                <img id="perfilGua_imagem" class="rounded-circle" src="{{asset('storage/guardians_pictures/'.$profile->profile_picture)}}">
{{-- Pra imagem aparecer, precisa dar o comando php artisan storage:link no bash --}}
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-12"> 
                <h1 class="pfOngGuard_titulo text-dark font-weight-bolder">
                    {{-- Essa função if verifica se existe o campo e se o mesmo está preenchido, estando ele imprime o apelido. É a mesma forma de escrever com o ?? ''. --}}
                    {{-- if(isset($guardian[`nickname`] && $guardian[`nickname`]) $guardian[`nickname`] --}}
                    {{ $profile['name'] ?? '' }}
                </h1>
                <p class="text-dark text-justify">
                    {{ $profile['about_the_guardian'] ?? ''}}
                </p>
                <div id="pfG_cx_i_txt" class="d-flex align-items-center">
                    <i class="mdi mdi-email-outline"></i> 
                    <p> Envie uma mensagem!</p>
                    <i class="mdi mdi-alert-outline"></i> 
                    <p> Denunciar Perfil</p>
                </div>
            </div>
        </div>
        @endif
    
    </section>

    {{-- Essa parte aqui também deve ser feita com back-end? Pra trazer os animais apadrinhados, lar temporário.... --}}
    <!--Onde esta localizado os Animais Apadrinhados-->
    <section class="container-fluid" id="perfilOngGuar_animais"> 
        <div class="row">
            <h2 class="col-lg-12 text-dark font-weight-bold pfOngGuard_titulo">Apadrinhados</h2>

            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="card" style="background-color: #E7E2FC">
                    <img src="/img/pfGuardiao_cachorro1.jpg" class="card-img-top img-fluid" height="300" width="300">
                    <div class="card-body">
                    <h4 class="card-title text-dark font-weight-bold">Elza</h4>
                        <p class="card-text text-secondary">Tenho uma pelagem de tres cores que é puro charme e pra completar uma carinha inocente que é i-rre-sis-tível!Adoro tomar um solzinho na janela e tirar cochilos na ...</p>
                        <a href="#" class="btn btn-roxo-outline">Saiba mais</a> 
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="card" style="background-color: #E7E2FC">
                    <img src="/img/pfGuardiao_gato1.jpeg" class="card-img-top img-fluid" height="300" width="300">
                    <div class="card-body">
                    <h4 class="card-title text-dark font-weight-bold">Chico</h4>
                        <p class="card-text text-secondary">Tenho uma pelagem de tres cores que é puro charme e pra completar uma carinha inocente que é i-rre-sis-tível!Adoro tomar um solzinho na janela e tirar cochilos na ...</p>
                        <a href="#" class="btn btn-roxo-outline">Saiba mais</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="card">
                    <img src="/img/pfGuardiao_cachorro2.jpg" class="card-img-top img-fluid" height="300" width="300">
                    <div class="card-body" style="background-color: #E7E2FC">
                        <h4 class="card-title text-dark font-weight-bold">Belquior</h4>
                        <p class="card-text text-secondary">Tenho uma pelagem de tres cores que é puro charme e pra completar uma carinha inocente que é i-rre-sis-tível!Adoro tomar um solzinho na janela e tirar cochilos na ...</p>
                        <a href="#" class="btn btn-roxo-outline">Saiba mais</a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!--Onde estão os animais adotados -->
    <section class="container-fluid bg-light" id="perfilOngGuar_animais"> 
        <div class="row">
            <h2 class="col-lg-12 text-dark font-weight-bold pfOngGuard_titulo">Adotados</h2>

            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="card">
                    <img src="/img/pfGuardiao_cachorro1.jpg" class="card-img-top img-fluid" height="300" width="300">
                    <div class="card-body" style="background-color:#D6EBE8">
                    <h4 class="card-title text-dark font-weight-bold">Elza</h4>
                        <p class="card-text text-secondary">Tenho uma pelagem de tres cores que é puro charme e pra completar uma carinha inocente que é i-rre-sis-tível!Adoro tomar um solzinho na janela e tirar cochilos na ...</p>
                        <a href="#" class="btn btn-roxo-outline">Saiba mais</a> 
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="card">
                    <img src="/img/pfGuardiao_gato1.jpeg" class="card-img-top img-fluid" height="300" width="300">
                    <div class="card-body" style="background-color:#D6EBE8">
                    <h4 class="card-title text-dark font-weight-bold">Chico</h4>
                        <p class="card-text text-secondary">Tenho uma pelagem de tres cores que é puro charme e pra completar uma carinha inocente que é i-rre-sis-tível!Adoro tomar um solzinho na janela e tirar cochilos na ...</p>
                        <a href="#" class="btn btn-roxo-outline">Saiba mais</a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!--Onde estão os animais lar temporário -->
    <section class="container-fluid" id="perfilOngGuar_animais"> 
        <div class="row">
            <h2 class="col-lg-12 text-dark font-weight-bold pfOngGuard_titulo">Lar Temporário</h2>

            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="card">
                    <img src="/img/pfGuardiao_cachorro1.jpg" class="card-img-top img-fluid" height="300" width="300">
                    <div class="card-body" style="background-color:#fdead1">
                    <h4 class="card-title text-dark font-weight-bold">Elza</h4>
                        <p class="card-text text-secondary">Tenho uma pelagem de tres cores que é puro charme e pra completar uma carinha inocente que é i-rre-sis-tível!Adoro tomar um solzinho na janela e tirar cochilos na ...</p>
                        <a href="#" class="btn btn-roxo-outline">Saiba mais</a> 
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="card">
                    <img src="/img/pfGuardiao_gato1.jpeg" class="card-img-top img-fluid" height="300" width="300">
                    <div class="card-body" style="background-color:#fdead1">
                    <h4 class="card-title text-dark font-weight-bold">Chico</h4>
                        <p class="card-text text-secondary">Tenho uma pelagem de tres cores que é puro charme e pra completar uma carinha inocente que é i-rre-sis-tível!Adoro tomar um solzinho na janela e tirar cochilos na ...</p>
                        <a href="#" class="btn btn-roxo-outline">Saiba mais</a>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection