@extends('layouts.templateGuardioes')

@section('title')
    Guardiões Pet | Lista Guardiões
@endsection

@section('content')
<div class="margem">
<section class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Lista de Usuários Guardiões</h3>
        </div>
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Nome do usuário</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Status</th>
                        <th scope="col">Grupo</th>
                    </tr>
                </thead>
                <tbody>
                @forelse ($listGuardians as $guardians)
                    <tr>
                        <th scope="row"> {{$guardians->id}} </th>
                        <td> {{$guardians->name}} </td>
                        <td> {{ $guardians->email }} </td>
                        <td> {{ $guardians->status_id }} </td>
                        <td> {{ $guardians->user_group_id }} </td>
                        <td>
                            <a class="btn btn-primary" href="/editar/{{$guardians->id}}">Atualizar</a>
                            <a class="btn btn-danger" href="/deletar/{{$guardians->id}}">Deletar</a>
                        </td>
                    </tr>
                @empty
                    <h1>Não tem usuários guardiões cadastrados</h1>
                @endforelse   
                </tbody>
            </table>
        </div>
    </div>
</section>
</div>

@endsection