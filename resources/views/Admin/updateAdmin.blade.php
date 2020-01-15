@extends('layouts.templateGuardioes')

@section('title')
    Guardiões Pet | Atualização Admin
@endsection

@section('content')
<div class="margem">
    <div class="container">
        <div class="row justify-content-center mt-10">
            <div class="col-lg-6 m-5">
            
                <h3 class="mt-10">Atualização de dados Admin</h3>

                @if(isset($user)) 
                <form action="/admin/atualizar" method="POST" class="card p-4">
                @csrf      
                    <!-- input hidden com o id do admin em Users -->
                    <input type="text" name="idAdmin" hidden value="{{ $user->id }}"> 

                    <div class="form-group">
                        <label for="nameAdmin">Nome Completo</label>
                        <input name="nameAdmin" type="text" class="form-control" id="nameAdmin" value="{{ $nameAdmin }}"> 
                    </div>

                    <div class="form-group">
                        <label for="emailAdmin">E-mail</label>
                        <input name="emailAdmin" type="email" class="form-control" id="emailAdmin" value="{{ $user->email }}">
                    </div>

                    <div class="form-group">
                        <label for="passwordAdmin">Senha</label>
                        <input name="passwordAdmin" type="password" class="form-control" id="passwordAdmin" value="{{ $user->password }}">
                    </div>

                    <div class="form-group">
                        <label for="statusAdmin">Status</label>
                        <input name="statusAdmin" type="text" class="form-control" id="statusAdmin" value="{{ $status ?? '' }}"> <!-- CONTINUA NÃO ACEITANDO O STATUS DE ADMINCONTROLLER -->
                    </div>

                    <div class="col-lg p-0">
                       <button type="submit" class="btn btn-roxo">Atualizar</button> 
                    </div>
                    
                </form>
                @endif

            </div>    
        </div> 
    </div>
</div>
@endsection