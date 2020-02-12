@extends('layouts.templateMenuLateral')

@section('title')
    Guardiões Pet | Minha Conta
@endsection

@section('content') 

<section  class="container-fluid col-8 mb-3" id="pfG_cx_info_principal"> 
    @if(isset($guardianId))
        <div class="row">
            <div class="col-md-6 d-flex justify-content-center">
                <img id="perfilGua_imagem" class="rounded-circle" src="{{asset('storage/guardians_pictures/'.$guardianId->profile_picture)}}">
{{-- Pra imagem aparecer, precisa dar o comando php artisan storage:link no bash --}}
            </div>

            <div class="col-md-6"> 
                <h1 class="pfOngGuard_titulo text-dark font-weight-bolder">
                    {{-- Essa função if verifica se existe o campo e se o mesmo está preenchido, estando ele imprime o apelido. É a mesma forma de escrever com o ?? ''. --}}
                    {{-- if(isset($guardian[`nickname`] && $guardian[`nickname`]) $guardian[`nickname`] --}}
                    {{ $guardianId['name'] ?? '' }}
                </h1>
                <p class="text-dark text-justify">
                    {{ $guardianId['about_the_guardian'] ?? ''}}
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
    @if($sponsor == true) 
    <section id="pets" class="py-2 px-5"> 
        <div class="row px-2">
            <h2 class="text-dark font-weight-bold pfOngGuard_titulo">Apadrinhados</h2>
        </div>
        <div class="row px-2">
            @foreach($pets as $pet)
            @if($pet->relation_type_id==3)
            <!-- <div class="col-sm-6 col-md-4"> -->
            <div class="card mb-4 col-11 col-sm-5 col-md-4 col-lg-3 border-none">
                <div id="img-pet-busca">
                    <img src="{{asset('storage/public/pets_pictures/'.$pet->picture)}}" class="card-img-top img-fluid">
                </div>
                    <div class="card-body">
                        <h4 class="card-title text-dark font-weight-bold">{{$pet->name}}</h4>
                        <p class="card-text text-secondary">{{$pet->description}}</p>
                        <a href="/pet/perfil/{{$pet->id}}" class="btn btn-roxo-outline">Saiba mais</a> 
                    </div>
            </div>
            @endif
            @endforeach
        </div>
    </section>
@endif

    <!--Onde estão os animais adotados -->
    @if($adopted == true) 
    <section id="pets" class="py-2 px-5"> 
        <div class="row px-2">
            <h2 class="text-dark font-weight-bold pfOngGuard_titulo">Adotados</h2>
        </div>
        <div class="row px-2">
            @foreach($pets as $pet)
            @if($pet->relation_type_id==1)
            <!-- <div class="col-sm-6 col-md-4"> -->
            <div class="card mb-4 col-11 col-sm-5 col-md-4 col-lg-3 border-none">
                <div id="img-pet-busca">
                    <img src="{{asset('storage/public/pets_pictures/'.$pet->picture)}}" class="card-img-top img-fluid">
                </div>
                    <div class="card-body">
                        <h4 class="card-title text-dark font-weight-bold">{{$pet->name}}</h4>
                        <p class="card-text text-secondary">{{$pet->description}}</p>
                        <a href="/pet/perfil/{{$pet->id}}" class="btn btn-roxo-outline">Saiba mais</a> 
                    </div>
            </div>
            @endif
            @endforeach
        </div>
    </section>
    @endif

    <!--Onde estão os animais lar temporário -->
    @if($home == true) 
    <section id="pets" class="py-2 px-5"> 
        <div class="row px-2">
            <h2 class="text-dark font-weight-bold pfOngGuard_titulo">Lar Temporário</h2>
        </div>
        <div class="row px-2">
            @foreach($pets as $pet)
            @if($pet->relation_type_id==2)
            <!-- <div class="col-sm-6 col-md-4"> -->
            <div class="card m-4 col-11 col-sm-5 col-md-4 col-lg-3 border-none">
                <div id="img-pet-busca">
                    <img src="{{asset('storage/public/pets_pictures/'.$pet->picture)}}" class="card-img-top img-fluid">
                </div>
                    <div class="card-body">
                        <h4 class="card-title text-dark font-weight-bold">{{$pet->name}}</h4>
                        <p class="card-text text-secondary">{{$pet->description}}</p>
                        <a href="/pet/perfil/{{$pet->id}}" class="btn btn-roxo-outline">Saiba mais</a> 
                    </div>
            </div>
            @endif
            @endforeach
        </div>
    </section>
    @endif
@endsection