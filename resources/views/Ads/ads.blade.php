@extends('layouts.templateGuardioes')

@section('title')
Guardiões Pet | Anúncios
@endsection

@section('content')
<section id="anuncios">
        <section>
            <h3 class="tituloGeralAnuncios mb-4 d-flex justify-content-center">Nossos Guardiões também precisam da sua ajuda!</h3>
        </section>
        <section>
            <div class="row p-3 d-flex justify-content-center align-items-center">
            @foreach($listAds ?? '' as $ad)
                <div class="col-6 col-md-4 col-lg-3 shadow p-3">
                    <div class="card" style="border-color:  #FF9640;">
                        <div class="card-body">
                            <h5 class="card-title text-center col-12">{{$ad->user->getName()}}</h5>
                            <p class="card-text text-center">{{$ad->medicine}}</p>
                            <a href="#" class="btn btn-roxo-outline d-flex justify-content-center">Entrar em contato</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
</section>
@endsection