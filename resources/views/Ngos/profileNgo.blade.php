@extends('layouts.templateBuscaRecolhida')

@section('title')
    Guardiões Pet | Perfil da ONG
@endsection

@section('content')

 <!--Onde esta localizado as informacoes da ONG e img-->
 <section class="container-fluid" id="pfong_cx_info_principal">
 <input type="text" name="idNgo" hidden value="{{ $ngo->id }}">
    <div class="row"> 
        <div id="pfOng_cx_info_principal_ordem" class="col-md-6">
            <h1 class="pfOngGuard_titulo text-dark font-weight-bolder">{{ $ngo->social_name ?? '' }}</h1>
            <p class="text-dark text-justify">{{ $ngo->about_the_ngo ?? '' }}</p>
            <div id="pfG_cx_i_txt" class="d-flex align-items-center">
                <i class="mdi mdi-email-outline"></i>
                <p> Envie uma mensagem!</p>
                <i class="mdi mdi-alert-outline"></i>
                <p> Denunciar Perfil</p>
            </div>
        </div>
        <div class="col-md-6 text-center my-auto">
            <img id="perfilOng_imagem" src="{{asset('storage/ngos_pictures/'.$ngo->profile_picture)}}">
        </div>
    </div>
</section>
    
<!--Onde esta localizado os Animais com a ONG-->
<section class="container-fluid" id="perfilOngGuar_animais"> 
    <div class="row">
        <h2 class="text-dark font-weight-bold pfOngGuard_titulo pl-3">Animais com a ONG</h2>
    </div>
    <div class="row pt-5">
        @foreach ($pets ?? '' as $pet)
            <div class="col-sm-6 col-lg-4 p-4">
                <div class="card">
                    <div id="img-pet-perfil">
                        <img src="{{asset('storage/public/pets_pictures/'.$pet->picture)}}" class="card-img-top img-fluid"> 
                    </div>
                    <div class="card-body" style="background-color: #E7E2FC">
                        <h4 class="card-title text-dark font-weight-bold">{{$pet->name}}</h4>
                            <p class="card-text text-secondary pet-description">{{$pet->description}}</p>
                            <a href="/pet/perfil/{{$pet->id}}" class="btn btn-roxo-outline">Saiba mais</a> 
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>

<!--Itens que a ONG necessita | Doações-->
@if(isset($myAds))
    <section> 
        @foreach($myAds ?? '' as $ad)
        <div class="mt-5 bg-light" id="pfong_precisa_cx_principal">
            <table class="table">
                <h4 class="bg-dark m-0 p-2 text-white">Estamos Precisando!</h4>
                <thead>
                    <tr class="bg-light">
                        <th scope="col" class="cinza largura-coluna">Medicamentos</th>
                        <th scope="col" class="cinza largura-coluna">Higiene</th>
                        <th scope="col" class="cinza largura-coluna">Alimentos</th>
                        <th scope="col" class="cinza largura-coluna">Brinquedos</th>
                        <th scope="col" class="cinza largura-coluna">Acessórios</th>
                        <th scope="col" class="cinza largura-coluna">Outros</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="cinza largura-coluna">{{$ad->medicine}}</td>
                        <td class="cinza largura-coluna">{{$ad->hygiene_supply}}</td>
                        <td class="cinza largura-coluna">{{$ad->food}}</td>
                        <td class="cinza largura-coluna">{{$ad->toys}}</td>
                        <td class="cinza largura-coluna">{{$ad->accessories}}</td>
                        <td class="cinza largura-coluna">{{$ad->others}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        @endforeach
    </section>
    @endif
<script type='text/javascript' src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
@endsection