@extends('layouts.templateBuscaRecolhida')

@section('title')
    Guardiões Pet | Perfil do Guardião
@endsection

@section('content') 

<section  class="container-fluid" id="pfG_cx_info_principal"> 
    @if(isset($profile))
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 d-flex justify-content-center">
                <img id="perfilGua_imagem" class="rounded-circle" height="300" width="300" src="{{asset('storage/guardians_pictures/'.$profile->profile_picture)}}">
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

    <!--Onde esta localizado os Animais Apadrinhados-->
    
    <section class="container-fluid" id="perfilOngGuar_animais"> 
        <div class="row">
            <h2 class="col-lg-12 text-dark font-weight-bold pfOngGuard_titulo">Apadrinhados</h2>
            @if(isset($relationSponsored))
                @if($sponsor)
                        @if(isset($petSponsored))
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="card" style="background-color: #E7E2FC">
                                @foreach ($pet_pictures as $picture)
                                <img src="{{asset('storage/pets_pictures/'.$picture->picture)}}" class="card-img-top img-fluid">
                                @endforeach
                                <div class="card-body">
                                <h4 class="card-title text-dark font-weight-bold">{{$petSponsored->name}}</h4>
                                    <p class="card-text text-secondary">{{$petSponsored->description}}</p>
                                    <a href="/pet/perfil/{{$petSponsored->id}}" class="btn btn-roxo-outline">Saiba mais</a> 
                                </div>
                            </div>
                        </div>
                        @endif
                    @else {{"Não deu certo perfil"}}
                @endif
            @endif

            @if(isset($relationSponsored))
                @if($sponsor)
                        @if(isset($petSponsored))
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="card" style="background-color: #E7E2FC">
                                @foreach ($pet_pictures as $picture)
                                <img src="{{asset('storage/pets_pictures/'.$picture->picture)}}" class="card-img-top img-fluid">
                                @endforeach
                                <div class="card-body">
                                <h4 class="card-title text-dark font-weight-bold">{{$petSponsored->name}}</h4>
                                    <p class="card-text text-secondary">{{$petSponsored->description}}</p>
                                    <a href="/pet/perfil/{{$petSponsored->id}}" class="btn btn-roxo-outline">Saiba mais</a> 
                                </div>
                            </div>
                        </div>
                        @endif
                    @else {{"Não deu certo perfil"}}
                @endif
            @endif

            @if(isset($relationSponsored))
                @if($sponsor)
                        @if(isset($petSponsored))
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="card" style="background-color: #E7E2FC">
                                @foreach ($pet_pictures as $picture)
                                <img src="{{asset('storage/pets_pictures/'.$picture->picture)}}" class="card-img-top img-fluid">
                                @endforeach
                                <div class="card-body">
                                <h4 class="card-title text-dark font-weight-bold">{{$petSponsored->name}}</h4>
                                    <p class="card-text text-secondary">{{$petSponsored->description}}</p>
                                    <a href="/pet/perfil/{{$petSponsored->id}}" class="btn btn-roxo-outline">Saiba mais</a> 
                                </div>
                            </div>
                        </div>
                        @endif
                    @else {{"Não deu certo perfil"}}
                @endif
            @endif

        </div>
    </section>

    <!--Onde estão os animais adotados -->
    <section class="container-fluid bg-light" id="perfilOngGuar_animais"> 
        <div class="row">
            <h2 class="col-lg-12 text-dark font-weight-bold pfOngGuard_titulo">Adotados</h2>
            @if(isset($relationAdopted))
                @if($adopted)
                    @if(isset($petAdopted))
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="card">
                                @foreach ($pet_pictures as $picture)
                                <img src="{{asset('storage/pets_pictures/'.$picture->picture)}}" class="card-img-top img-fluid" height="300" width="300">
                                @endforeach
                                <div class="card-body" style="background-color:#D6EBE8">
                                <h4 class="card-title text-dark font-weight-bold">{{$petAdopted->name}}</h4>
                                    <p class="card-text text-secondary">{{$petAdopted->description}}</p>
                                    <a href="/pet/perfil/{{$petAdopted->id}}" class="btn btn-roxo-outline">Saiba mais</a> 
                                </div>
                            </div>
                        </div>
                    @endif
                    @else {{"Não deu certo perfil"}}
                @endif
            @endif

            @if(isset($relationAdopted))
                @if($adopted)
                    @if(isset($petAdopted))
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="card">
                                @foreach ($pet_pictures as $picture)
                                <img src="{{asset('storage/pets_pictures/'.$picture->picture)}}" class="card-img-top img-fluid" height="300" width="300">
                                @endforeach
                                <div class="card-body" style="background-color:#D6EBE8">
                                <h4 class="card-title text-dark font-weight-bold">{{$petAdopted->name}}</h4>
                                    <p class="card-text text-secondary">{{$petAdopted->description}}</p>
                                    <a href="/pet/perfil/{{$pet->id}}" class="btn btn-roxo-outline">Saiba mais</a> 
                                </div>
                            </div>
                        </div>
                    @endif
                    @else {{"Não deu certo perfil"}}
                @endif
            @endif

        </div>
    </section>

    <!--Onde estão os animais lar temporário -->
   
    <section class="container-fluid" id="perfilOngGuar_animais"> 
        <div class="row">
            <h2 class="col-lg-12 text-dark font-weight-bold pfOngGuard_titulo">Lar Temporário</h2>
            @if($profileGuardian == $guardian)
                @if($relationHome)
                    @if($home)
                        @if(isset($petHome))
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="card">
                                    @foreach ($pet_pictures as $picture)
                                    <img src="{{asset('storage/pets_pictures/'.$picture->picture)}}" class="card-img-top img-fluid" height="300" width="300">
                                    @endforeach
                                    <div class="card-body" style="background-color:#fdead1">
                                    <h4 class="card-title text-dark font-weight-bold">{{$petHome->name}}</h4>
                                        <p class="card-text text-secondary">{{$petHome->description}}</p>
                                        <a href="/pet/perfil/{{$petHome->id}}" class="btn btn-roxo-outline">Saiba mais</a> 
                                    </div>
                                </div>
                            </div>
                        @endif
                        @else {{"Não deu certo perfil"}}
                    @endif
                @endif
            @endif
           

        </div>
    </section>
@endsection