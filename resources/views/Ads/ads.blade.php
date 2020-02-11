@extends('layouts.templateGuardioes')

@section('title')
Guardiões Pet | Anúncios
@endsection

@section('content')
<section id="anuncios">
        <!-- Se existir algum anúncio, exibe o título -->
    @if(isset($listAds[0]))
    <h3 class="tituloGeralAnuncios mb-4 d-flex justify-content-center">Tem itens para doação? Ajude!</h3>
    <p class="text text-center">Roupinhas, remédios, ração... tá sobrando na sua casa? Tem muitas organizações - e muitos guardiões também! - precisando de todo tipo de item para cuidar e alimentar gatinhos e cachorros. Veja os itens publicados por cada organização ou guardião, e contribua!</p>
    @foreach($listAds ?? '' as $ad)
    <div class="mt-5">
        <table class="table">
            <h4 class="bg-cinza m-0 p-2 text-white">{{$ad->user->getName()}}</h4>
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
        <div class="row justify-content-end m-0">
            <a href="/chat">
                <button class="btn-roxo">Entrar em contato</button>
            </a>
        </div>
    </div>
    @endforeach
    @endif
    @if(!isset($listAds[0]))
    <div class="row justify-content-center p-5 mt-5">
        <h3 class="titleh3">Nenhum anúncio ativo no momento.</h3>
        <p class="text text-center">Se você é Guardião ou ONG e precisa de doações (medicamentos, itens de higiene,
            alimentos ou qualquer outra necessidade), acesse sua conta para cadastrar anúncios, assim outras pessoas
            podem ajudar você. =)</p>
        <p class="text text-center"><span style="font-weight:bold;">Ainda não tem cadastro?</span> <a
                href="/cadastre-se" class="link-roxo">Cadastre-se agora</a> e faça parte da maior comunidade amiga dos
            pets.</p>
    </div>
    @endif
</section>
@endsection