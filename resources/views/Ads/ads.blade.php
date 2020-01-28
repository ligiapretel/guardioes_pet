@extends('layouts.templateGuardioes')

@section('title')
Guardiões Pet | Anúncios
@endsection

@section('content')
<section id="anuncios">
        <!-- Se existir algum anúncio, exibe o título -->
        @empty($listAds)
            <h3 class="tituloGeralAnuncios mb-4 d-flex justify-content-center">Nossos Guardiões também precisam da sua ajuda!</h3>
        @endempty
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
                <div class="row justify-content-center p-5 mt-5">
                    <h3 class="titleh3">Nenhum anúncio ativo no momento.</h3>
                    <p class="text text-center">Se você é Guardião ou ONG e precisa de doações (medicamentos, itens de higiene, alimentos ou qualquer outra necessidade), acesse sua conta para cadastrar anúncios, assim outras pessoas podem ajudar você. =)</p>
                    <p class="text text-center"><span style="font-weight:bold;">Ainda não tem cadastro?</span> <a href="/cadastre-se" class="link-roxo">Cadastre-se agora</a> e faça parte da maior comunidade amiga dos pets.</p>
                </div>
            @endforelse                 
</section>
@endsection