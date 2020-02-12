@extends('layouts.templateMenuLateral')

@section('title')
    Guardiões Pet | Meus Anúncios
@endsection

@section('content')

<div class="col-9 p-5 mt-5">
        <!-- Verificando se o anúncio foi criado/atualizado com sucesso -->
        @if(session("success"))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{session("success")}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
          
        @endif
        <!-- Verificando de erro no cadastro/atualização do anúncio -->
        @if(session("error"))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>{{session("error")}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        @if(isset($myAds[0]))
        @foreach($myAds ?? '' as $ad)
        <div class="mt-5">
            <table class="table">
            <h4 class="bg-cinza m-0 p-2 text-white">Anúncio | Atualizado em {{$ad->updated_at}}</h4>
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
                <a class="btn btn-primary" href="/anuncios/editar/{{$ad->id}}">Atualizar</a>
                <a class="btn btn-danger ml-2"  href="/anuncios/deletar/{{$ad->id}}">Deletar</a>
            </div>
        </div>
        @endforeach
        @else
        <div class="p-5 mt-5">
            <h3 class="mt-5 text-center">Você não possui anúncios cadastrados.</h3>
        </div>
        @endif
    <div>
@endsection