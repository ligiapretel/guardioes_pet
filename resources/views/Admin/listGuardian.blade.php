@extends('layouts.templateGuardioes')

@section('title')
    GP | Guardião
@endsection

@section('content')
<div class="margem">
<section class="container">
    <div class="row">
        <div class="col-md-12 mb-4">
            <h3>Lista de usuários:</h3>
            
            <a href="/admin" class="btn btn-outline-secondary">Administradores</a>
            <a href="/admin/ong" class="btn btn-outline-secondary">Ong</a>
            <a href="/admin/guardiao" class="btn btn-primary">Guardião</a>
        </div>

        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Nome</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Status</th>
                        <th scope="col">Criado em</th>
                        <th scope="col">Atualizado em</th>
                    </tr>
                </thead>
                <tbody>
                @forelse ($listGuardian as $guardian)
                    <tr>
                        <th scope="row"> {{$guardian->id}} </th>
                        <td> {{ $guardian->name }} </td>
                        <td> {{ $guardian->email }} </td>
                        <td> {{ $guardian->status_id }} </td>
                        <td> {{ $guardian->created_at }} </td>
                        <td> {{ $guardian->updated_at }} </td>
                        <td>
                            <a class="btn btn-info" href="/admin/guardiao/atualizar/{{$guardian->id}}">Atualizar</a>                            
                        </td>
                    </tr>
                @empty
                    <h1>Não há Guardiões cadastrados</h1>
                @endforelse   
                </tbody>
            </table>
        </div>
    </div>
</section>
</div>

@endsection