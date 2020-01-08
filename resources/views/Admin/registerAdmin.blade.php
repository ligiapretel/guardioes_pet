@extends('layouts.templateGuardioes')

@section('title')
    Guardiões Pet | Cadastro Admin
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 m-5">

                <h3 class="mt-10">Cadastro Admin</h3>

                <form action="/admin/cadastro" method="POST" class="card p-4">
                @csrf    

                    <div class="form-group">
                        <label for="nameAdmin">Nome Completo</label>
                        <input name="nameAdmin" type="text" class="form-control" id="nameAdmin" placeholder="Digite seu nome completo">
                    </div>

                    <div class="form-group">
                        <label for="emailAdmin">E-mail</label>
                        <input name="emailAdmin" type="email" class="form-control" id="emailAdmin" placeholder="Digite seu e-mail">
                    </div>

                    <div class="form-group">
                        <label for="passwordAdmin">Senha</label>
                        <input name="passwordAdmin" type="password" class="form-control" id="passwordAdmin" placeholder="Digite sua senha de 8 dígitos">
                    </div>

                    <div class="col-lg p-0">
                       <button type="submit" class="btn btn-roxo">Cadastrar</button> 
                    </div>
                    
                </form>
            </div>    
        </div>  

        <div class="row justify-content-center">
            <div class="col-lg-6 m-5">  
                @if(isset($result))
                    @if($result)
                        <h3>Cadastro realizado com sucesso</h3>
                    @else
                        <h3>Não foi possível realizar o cadastro.</h3>
                    @endif
                @endif
            </div>
        </div>
    </div>

@endsection