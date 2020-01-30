@extends('layouts.templateGuardioes')

@section('title')
    Guardiões Pet | Login
@endsection

@section('content')

<main id="main-login" class="col-lg-12 col-md-12 col-sm-12 col-xs-6">
    @if(isset($message))
        <script>alert('Cadastro realizado com Sucesso!');</script>
    @endif
        <div id="container-form-login" class="col-lg-5 col-md-6 col-sm-6 col-xs-6">
            <!-- Exibindo mensagem para o usuário que estiver inativo  -->
            @if(session("error"))
                <div class="alert alert-danger alert-dismissible fade show mt-5" role="alert">
                    <strong>{{session("error")}}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <form action="/login" method="POST">
            {{ csrf_field() }} <!--gera o token de segurança, verifica se o usuário é autenticado-->
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-6 text-center">
                        <h1>Acesse sua conta</h1>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-6 p-2 largura-form-xs">
                        <input class="form-control @error('email') is-invalid @enderror" type="text" name="email" placeholder="E-mail" required>
                    </div>

                    @error('email') 
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-6 p-2 largura-form-xs">
                        <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="Senha" required>
                    </div>

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-6 p-2 largura-form-xs">
                        <button class="btn-roxo btn-busca-expandida" type="submit" name="procurar">Entrar</button>
                    </div>
                </div>
                <div class="row justify-content-center align-items-baseline">
                    <div class="sobre-senha col-lg-5 col-md-5 col-sm-5 col-xs-5 p-2 largura-form-xs">
                        <input type="checkbox" name="lembrar-dados" value="aceita-lembrar-dados">
                        <label class="label-lembrar-dados">Lembrar dados</label>
                    </div>
                    <div class="sobre-senha col-lg-5 col-md-5 col-sm-5 col-xs-5 p-2 largura-form-xs">
                        <a class="esqueci-senha" href="#">
                            <p>Esqueci a senha</p>
                        </a>
                    </div>
                </div>
            </form>
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-6 text-center">
                    <h2>ou cadastre-se</h2>
                </div>
                <div class="col-lg-5 col-md-10 col-sm-10 col-xs-5 p-2 largura-form-xs m-1 text-center">
                    <a href="ong/cadastro"><button class="btn-roxo btn-login-enviar" type="submit" name="sou-ong">Sou ONG</button></a>
                </div>
                <div class="col-lg-5 col-md-10 col-sm-10 col-xs-5 p-2 largura-form-xs m-1 text-center">
                    <a href="guardiao/cadastrar"><button class="btn-roxo btn-login-enviar" type="submit"
                            name="sou-guardiao">Sou Guardião</button></a>
                </div>
            </div>
        </div>
    </main>

@endsection