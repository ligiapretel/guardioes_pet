@extends('layouts.templateMenuLateral')

@section('title')
    Guardiões Pet | Meus Anúncios
@endsection

@section('content')

<div class="card col-lg-8 p-5 mt-5">
       <div class="mt-5">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Item</th>
                        <th scope="col">Medicamentos</th>
                        <th scope="col">Produtos de Higiene</th>
                        <th scope="col">Alimentos</th>
                        <th scope="col">Brinquedos</th>
                        <th scope="col">Acessórios</th>
                        <th scope="col">Outros</th>                        
                    </tr>
                </thead>
                <tbody>
                    @forelse($ads as $ad)
                        <tr>
                            <th scope="row">{{$ad->id}}</th>
                            <td>{{$ad->medicine}}</td>
                            <td>{{$ad->hygiene_supply}}</td>
                            <td>{{$ad->food}}</td>
                            <td>{{$ad->toys}}</td>
                            <td>{{$ad->accessories}}</td>
                            <td>{{$ad->others}}</td>
                            <td>{{$ad->created_at}}</td>
                            <td>{{$ad->updated_at}}</td>
                            <td>
                                <a class="btn btn-primary" href="/anuncios/editar/{{$ad->id}}">Atualizar</a>
                                <a class="btn btn-danger"  href="/anuncios/deletar/{{$ad->id}}">Deletar</a>
                            </td>
                        </tr>
                    @empty
                        <h3>Você não possui anúncios cadastrados.</h3>
                    @endforelse    
                    </tbody>
                </table>
            </div>
    <div>
@endsection