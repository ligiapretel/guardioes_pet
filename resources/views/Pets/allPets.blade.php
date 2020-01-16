@extends('layouts.templateBuscaRecolhida')

@section('title')
    Guardiões Pet | Busca
@endsection

@section('content')

<section class="py-2 p-md-4">

        <div class="resultados-busca">
            <h1 class="text-center">Encontre seu pet! </h1>
            <h3 class="text-center">Eles estão esperando um guardião como você. Conheça:</h3>
            <div class="row justify-content-center mt-5">
                
                @foreach ($pets as $pet)
                <div class="card mb-4 col-11 col-sm-5 col-md-4 col-lg-3 border-none">
                    <a href="pet/perfil/{{$pet->id}}">
                        <img src="img/perfil_animal_01.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$pet->name}}</h5>
                            <p class="card-text">{{$pet->description}}</p>
                            <div class="d-flex justify-content-center">
                                <button type="button" class="btn-roxo-outline">Veja mais</button>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach

        </div>

        <div class="d-flex justify-content-center my-5">
            <button class="btn-roxo text-uppercase">Mostrar mais pets</button>
        </div>
    </section>

@endsection