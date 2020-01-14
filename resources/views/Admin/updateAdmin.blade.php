@extends('layouts.templateGuardioes')

@section('title')
    Guardiões Pet | Atualização Admin
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 m-5">

                <h3 class="mt-10">Atualização de dados Admin</h3>

                @if(isset($admin)) 
                <form action="/admin/atualizar" method="POST" class="card p-4">
                @csrf      
                    <!-- input hidden com o id do Admin -->
                    <input type="text" name="idAdmin" hidden value="{{ $admin->id }}"> 

                    <div class="form-group">
                        <label for="nameAdmin">Nome Completo</label>
                        <input name="nameAdmin" type="text" class="form-control" id="nameAdmin" value="{{ $admin->name }}">
                    </div>

                    <div class="form-group">
                        <label for="emailAdmin">E-mail</label>
                        <input name="emailAdmin" type="email" class="form-control" id="emailAdmin" value="{{ $admin->email }}">
                    </div>

                    <div class="form-group">
                        <label for="passwordAdmin">Senha</label>
                        <input name="passwordAdmin" type="password" class="form-control" id="passwordAdmin" value="{{ $admin->password }}">
                    </div>

                    <div class="col-lg p-0">
                       <button type="submit" class="btn btn-roxo">Atualizar</button> 
                    </div>
                    
                </form>
                @elseif(isset($result)) <!-- NÃO ENTENDI ESSA PASSAGEM -->

                @else
                    <h3>O usuário não existe ou id incorreto</h3>
                @endif

            </div>    
        </div>  

        <div class="row justify-content-center">
            <div class="col-lg-6">  
                @if(isset($result))
                    @if($result)
                        <h3>Dados atualizados com sucesso.</h3>
                    @else 
                        <h3>Não foi possível atualizar os dados.</h3>
            </div>
        </div>
    </div>

@endsection