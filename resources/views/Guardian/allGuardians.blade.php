@extends('layouts.templateBuscaRecolhida')

@section('title')
    Guardiões Pet | Lista de Guardiões
@endsection

@section('content')

<section class="py-2 p-md-4">
    <div class="resultados-busca">
        <h1 class="text-center">Conheça nossos Guardiões!</h1>
        <h4 class="text-center">Eles estão prontos para ajudar (e ser ajudados)!</h4>
        <div class="row justify-content-center mt-5">
            @foreach ($guardians as $g)
            <div class="card mb-4 col-11 col-sm-5 col-md-4 col-lg-3 border-none">
                <a href="./perfil/{{$g->id}}">
                <div id="img-pet-busca">
                    <img src="{{asset('storage/guardians_pictures/'.$g->profile_picture)}}" class="card-img-top img-fluid" alt="fotoDePerfilDoGuardiao">
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{$g->name}}</h5>
                    <p class="card-text pet-description">{{$g->about_the_guardian}}</p>
                    <div class="d-flex justify-content-center">
                        <button type="button" class="btn-roxo-outline">Saiba Mais</button>
                    </div>
                </div>
                </a>
            </div>
                
            @endforeach
        </div>
    </div>
</section>