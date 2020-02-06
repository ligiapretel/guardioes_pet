@extends('layouts.templateBuscaRecolhida')

@section('title')
    Guardiões Pet | Busca
@endsection

@section('content')

<section class="py-2 p-md-4">

    @if(!empty($pets))
    <div class="resultados-busca">
        <h1 class="text-center">Deu match! </h1>
        <h3 class="text-center">Animais com o perfil que você buscou. Conheça:</h3>
        <div class="row justify-content-center mt-5">
            @foreach($pets as $pet)
            <!--Mostrar resultado da busca-->
            <div class="card mb-4 col-11 col-sm-5 col-md-4 col-lg-3 border-none">
                <a href="pet/perfil/{{$pet->id}}">
                    <!--Precisa inserir a imagem-->
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
            @else
            <div class="col-lg-8">
                <h1 id="buscaVazia">Infelizmente não encontramos o perfil que buscou, tente buscar novamente com novas
                    opções.</h1>
            </div>
            @endif
        </div>
    </div>
</section>
@endsection