@extends('layouts.templateBuscaRecolhida')

@section('title')
    Guardiões Pet | Lista de Guardiões
@endsection

@section('content')

<section class="container">
    <div class="resultados-busca">
        <h1 class="text-center">Conheça nossos Guardiões!</h1>
        <h4 class="text-center">Eles estão prontos para ajudar!</h4>
        <div class="row justify-content-center mt-5">
            @foreach ($guardians as $g)
            <div class="card mb-4 col-11 col-sm-5 col-md-4 col-lg-3 border-none">
                <a href="guardiao/perfil/{{$g->id}}">
                <img src="{{asset('storage/guardians_pictures/'.$g->profile_picture)}}" class="card-img-top img-fluid" alt="fotoDePerfilDoGuardiao">
                <div class="card-body">
                    <h5 class="card-title">{{$g->name}}</h5>
                    <p class="card-text">{{$g->about_the_guardian}}</p>
                    <div>
                        <button type="reset" class="btn btn-outline-danger mr-3"><a href="/guardiao/deletar/{{$g->id}}"> Deletar</a></button>
                        <button type="submit" class="btn-roxo-outline ml-3"><a href="/guardiao/editar/{{$g->id}}"> Editar</a></button>
                    </div>
                </div>
                </a>
            </div>
                
            @endforeach
        </div>
    </div>
</section>