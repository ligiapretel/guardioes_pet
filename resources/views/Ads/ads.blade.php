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
        @forelse($listAds ?? '' as $ad)
            <div class="mt-5">
                <table class="table">
                    <h4 class="bg-dark m-0 p-2 text-white">{{$ad->user->getName()}}</h4>
                    <thead>
                        <tr class="bg-light">
                            <th scope="col">Medicamentos</th>
                            <th scope="col">Itens de Higiene</th>              
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
                <div class="row justify-content-end m-0">
                    <button class="btn-roxo">Entrar em contato</button>              
                </div>
            </div>
            @empty
                <h3>Não encontramos anúncios para exibir.</h3>
            @endforelse                 
        </section>
</section>
@endsection