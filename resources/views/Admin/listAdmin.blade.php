@extends('layouts.templateGuardioes')

@section('title')
    Guardiões Pet | Lista Admin
@endsection

@section('content')
<div class="margem">
<section class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Lista de Usuários Administradores</h3>
        </div>
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Nome do usuário</th>
                        <th scope="col">E-mail</th>
                    </tr>
                </thead>
                <tbody>
                @forelse ($listAdmin as $admin)
                    <tr>
                        <th scope="row"> {{$admin->id}} </th>
                        <td> {{$admin->name}} </td>
                        <td> {{ $admin->email }} </td>
                        <td>
                            <a class="btn btn-primary" href="/admin/atualizar/{{$admin->id}}">Atualizar</a>
                            <a class="btn btn-danger" href="/admin/deletar/{{$admin->id}}">Deletar</a>
                        </td>
                    </tr>
                @empty
                    <h1>Não tem usuários administradores cadastrados</h1>
                @endforelse   
                </tbody>
            </table>
        </div>
    </div>
</section>
</div>

@endsection