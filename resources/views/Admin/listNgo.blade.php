@extends('layouts.templateGuardioes')

@section('title')
    GP | Ong
@endsection

@section('content')
<div class="margem">
<section class="container">
    <div class="row">
        <div class="col-md-12 mb-4">
            <h3>Lista de usuários:</h3>
            
            <a href="/admin" class="btn btn-outline-secondary">Administradores</a>
            <a href="/admin/ong" class="btn btn-primary">Ong</a>
            <a href="/admin/guardiao" class="btn btn-outline-secondary">Guardião</a>
        </div>
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Razão Social</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">CNPJ</th>
                        <th scope="col">Status</th>
                        <th scope="col">Criado em</th>
                        <th scope="col">Atualizado em</th>
                    </tr>
                </thead>
                <tbody>
                @forelse ($listNgo as $ngo)
                    <tr>
                        <th scope="row"> {{ $ngo->id }} </th>
                        <td> {{ $ngo->social_name }} </td>
                        <td> {{ $ngo->email }} </td>
                        <td> {{ $ngo->cnpj }} </td>
                        <td> {{ $ngo->status_id }} </td>
                        <td> {{ $ngo->created_at }} </td>
                        <td> {{ $ngo->updated_at }} </td>
                        <td>
                            <a class="btn btn-info" href="/admin/ong/atualizar/{{$ngo->id}}">Atualizar</a>
                        </td>
                    </tr>
                @empty
                    <h1>Não há Ong cadastrada</h1>
                @endforelse   
                </tbody>
            </table>
        </div>
    </div>
</section>
</div>

@endsection