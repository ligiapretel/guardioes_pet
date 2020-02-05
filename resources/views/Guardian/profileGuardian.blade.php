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
   @if($sponsor == true) 
        <section class="container-fluid" id="perfilOngGuar_animais"> 
            <div class="row">
                
                <h2 class="col-lg-12 text-dark font-weight-bold pfOngGuard_titulo">Apadrinhados</h2>
                
                
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                @foreach($pets as $pet)
                                @if($pet->relation_type_id==3)
                                <div class="card" style="background-color: #E7E2FC">
                                    
                                    <img src="{{asset('storage/public/pets_pictures/'.$pet->picture)}}" class="card-img-top img-fluid">
                                    
                                    <div class="card-body">
                                    <h4 class="card-title text-dark font-weight-bold">{{$pet->name}}</h4>
                                        <p class="card-text text-secondary">{{$pet->description}}</p>
                                        <a href="/pet/perfil/{{$pet->id}}" class="btn btn-roxo-outline">Saiba mais</a> 
                                    </div>
                                </div>
                                @endif
                                @endforeach
                            </div>
                            
            </div>
        </section>
    @endif


    <!--Onde estão os animais adotados -->
    @if($adopted == true) 
    <section class="container-fluid bg-light" id="perfilOngGuar_animais"> 
        <div class="row">
            <h2 class="col-lg-12 text-dark font-weight-bold pfOngGuard_titulo">Adotados</h2>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            @foreach($pets as $pet)
                            @if($pet->relation_type_id==1)
                            <div class="card">
                                <img src="{{asset('storage/public/pets_pictures/'.$pet->picture)}}" class="card-img-top img-fluid" height="300" width="300">
                               
                                <div class="card-body" style="background-color:#D6EBE8">
                                <h4 class="card-title text-dark font-weight-bold">{{$pet->name}}</h4>
                                    <p class="card-text text-secondary">{{$pet->description}}</p>
                                    <a href="/pet/perfil/{{$pet->id}}" class="btn btn-roxo-outline">Saiba mais</a> 
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
        </div>
    </section>
    @endif

    <!--Onde estão os animais lar temporário -->

    @if($home == true) 
    <section class="container-fluid" id="perfilOngGuar_animais"> 
        <div class="row">
            
            <h2 class="col-lg-12 text-dark font-weight-bold pfOngGuard_titulo">Lar Temporário</h2>
        
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                @foreach($pets as $pet)
                                @if($pet->relation_type_id==2)
                                <div class="card">
                                    
                                    <img src="{{asset('storage/public/pets_pictures/'.$pet->picture)}}" class="card-img-top img-fluid" height="300" width="300">
                                    
                                    <div class="card-body" style="background-color:#fdead1">
                                    <h4 class="card-title text-dark font-weight-bold">{{$pet->name}}</h4>
                                        <p class="card-text text-secondary">{{$pet->description}}</p>
                                        <a href="/pet/perfil/{{$pet->id}}" class="btn btn-roxo-outline">Saiba mais</a> 
                                    </div>
                                </div>
                                @endif
                                @endforeach
                            </div>
               
        </div>
    </section>
    @endif

<!--Itens que o Guardião necessita | Doações-->
    @if(isset($myAds))
    <section class="bg-light" id="pfong_precisa_cx_principal"> 
        @foreach($myAds ?? '' as $ad)
        <div class="mt-5">
            <table class="table">
                <h4 class="bg-dark m-0 p-2 text-white">Estou Precisando!</h4>
                <thead>
                    <tr class="bg-light">
                        <th scope="col">Medicamentos</th>
                        <th scope="col">Produtos de Higiene</th>
                        <th scope="col">Alimentos</th>
                        <th scope="col">Brinquedos</th>
                        <th scope="col">Acessórios</th>
                        <th scope="col">Outros</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$ad->medicine}}</td>
                        <td>{{$ad->hygiene_supply}}</td>
                        <td>{{$ad->food}}</td>
                        <td>{{$ad->toys}}</td>
                        <td>{{$ad->accessories}}</td>
                        <td>{{$ad->others}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        @endforeach
    </section>
    @endif

@endsection