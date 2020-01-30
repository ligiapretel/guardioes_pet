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

        @if(isset($myAds))
        @foreach($myAds ?? '' as $ad)
        <div class="mt-5">
            <table class="table">
            <h4 class="bg-dark m-0 p-2 text-white">Anúncio | Atualizado em {{$ad->updated_at}}</h4>
                <thead>
                    <tr class="bg-light">
                        <th scope="col">Medicamentos</th>
                        <th scope="col">Produtos de Higiene</th>
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
                    <!-- <h3>Você não possui anúncios cadastrados.</h3> -->
                </tbody>
            </table>
            <div class="row justify-content-end m-0">
                <a class="btn btn-primary" href="/anuncios/editar/{{$ad->id}}">Atualizar</a>
                <a class="btn btn-danger ml-2"  href="/anuncios/deletar/{{$ad->id}}">Deletar</a>
            </div>
        </div>
        @endforeach
        @else
        <div class="col-6 col-md-12 col-lg-8 p-5 mt-5">
            <h3 class="pt-5 mt-5 text-center">Você não possui anúncios cadastrados.</h3>
        </div>
        @endif
    <div>
@endsection