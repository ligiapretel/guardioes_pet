<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="img/escudo.png" sizes="32x32" rel="shortcut icon"/>
    <link href="/css/styles.css" rel="stylesheet"/>
    <link href='https://fonts.googleapis.com/css?family=Rockwell' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Satisfy&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.5.95/css/materialdesignicons.min.css">
    <title>@yield('title')</title>
</head>
<body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!--HEADER-->
<header class="fixed-top">

<div class="container col-12 pt-2 pb-2">

<nav class="navbar navbar-expand-lg navbar-dark header-menu">

<a class="fonteHeader" href="/home">
        <img src="/img/escudo.png" alt="Guardiões Pet" width="35" class="d-inline-block align-center"> Guardiões Pet
    </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

        <ul class="navbar-nav ml-md-auto mt-2 mt-lg-0 lista-menu">

                <li class="nav-item">
                    <a class="nav-link header-link" href='/home#seja-guardiao-home'>Ser um guardião</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link header-link" href="/sobre">Sobre nós</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link header-link" href='/home#como-funciona-home'>Como funciona</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link header-link" href="/parceiros">Parceiros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link header-link" href="/anuncios">Doações</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link header-link" href="index.php#footer">Contato</a>
                </li> -->

                <!--VERIFICAR A ROTA DE LOGIN-->
                <li class="nav-item">
                    <a class="nav-link header-link" href="/login">Login</a>
                    <li class="nav-item">
                <a href="/cadastre-se" class="header-link"><button type="button" class="btn-roxo">Cadastre-se</button></a>
            </ul>

        </div>

    </nav>
    </div>
</header>
<!--FINAL DO HEADER-->



<!--MENU LATERAL-->
    <main class="row d-flex" >
        <section class="col-lg-3 d-flex">
            <!--menu lateral na esquerda-->
            <aside id="menu-ong" class="col-lg-3 col-md-12 col-sm-10 col-xs-8 p-4">
                <a href="#menu-principal" data-toggle="collapse" aria-expanded="false" class="navbar-menu-principal collapsed col-12 dropdown-toggle">
                    <img src="/img/user-icon.png" class="ml-3" alt="icone de usuário" id="user-icon">
                </a>	 
                
                <div class="card navbar-menu-itens collapse" style="width: 20rem;" id="menu-principal"> 
                    @if(isset($profile))
                        @if($profile)
                            <a class="nav-link menu-ong active mt-1" href="/guardiao/editar/{{$profile->id}}">Meu Perfil</a><!--depois q fizerem o login passar a session e o -> id-->
                            <a class="nav-link menu-ong" href="/anuncios/meus-anuncios">Anúncios Cadastrados</a>
                            <a class="nav-link menu-ong" href="/anuncios/cadastro">Cadastrar Novos Anúncios</a>
                            <a class="nav-link menu-ong" href="/chat">Mensagens</a>
                            <a class="nav-link menu-ong-sair" href="/logout">Sair</a>
                            <a class="nav-link menu-ong-sair" href="/guardiao/deletar/{{$profile->id}}">Deletar Conta</a><!--depois q fizerem o login passar a session e o -> id-->
                        @endif
                    @else
                    <img id="perfil-ong" class="ml-4" src="{{ asset($ngo ?? ''['profile_picture'] ?? '')  }}" alt="logo da ONG" />
                        <div class="card-body" style="width: 20rem;">
                            <nav class="nav flex-column bg-light">
                                <a class="nav-link menu-ong active" href="/ong/edita/{{ $ngo->id ?? '' }}">Meu Perfil</a><!--depois q fizerem o login passar a session e o -> id-->
                                <a class="nav-link menu-ong" href="#">Animais Cadastrados</a>
                                <a class="nav-link menu-ong" href="/pet/cadastro">Cadastrar Novos Animais</a>
                                <a class="nav-link menu-ong" href="/anuncios/meus-anuncios">Anúncios Cadastrados</a>
                                <a class="nav-link menu-ong" href="/anuncios/cadastro">Cadastrar Novos Anúncios</a>
                                <a class="nav-link menu-ong" href="/chat">Mensagens</a>
                                <a class="nav-link menu-ong-sair" href="/logout">Sair</a>
                                <form method='post' action='{{ url("ong/deleta") }}' onsubmit='if(!confirm("Desdejeas realmete excluir?")) return false;'>
                                    @csrf
                                    <input type='hidden' value='{{ 2 }}' name='id'>
                                    <button class="nav-link menu-ong-sair" href="#">Deletar Conta</button>
                                </form>
                                
                            </nav>    
                        </div>
                    @endif
                </div>
            </aside>         
        </section>
        @yield('content')
    </main>




<!--FOOTER-->
<footer>
        <section class="container">
            <div class="row pt-4">
                <div class="col-lg-7 col-md-7 col-sm-12">
                    <div class="row">

                        <ul class="col-lg-4 col-md-5 col-sm-6 align-content-around list-unstyled">
                            <li><a class="menu-link" href="/home">Home</a></li>
                            <li><a class="menu-link" href="/home#seja-guardiao-home">Ser um guardião</a></li>
                            <li><a class="menu-link" href="/sobre">Sobre nós</a></li>
                            <li><a class="menu-link" href="/home#como-funciona-home">Como funciona?</a></li>
                            <li><a class="menu-link" href="/parceiros">Parceiros</a></li>
                            <li><a class="menu-link" href="/anuncios">Doações</a></li>
                        </ul>

                        <ul class="col-lg-8 col-md-7 col-sm-6 list-unstyled">
                            <li><a class="menu-link" href="#">Perguntas frequentes</a></li>
                            <li><a class="menu-link" href="#">Política de privacidade</a></li>
                            <li><a class="menu-link" href="#">Termos de uso</a></li>
                        </ul>

                    </div>    

                    <div class="row">
                        <div class="col-12 pt-5 pb-5">
                            <div class="rede" id="facebook">
                                <a target="_blank" href="https://www.facebook.com/guardioesPet"><img src="/img/facebook1.png" alt="facebook"></a>
                            </div>
                            <div class="rede" id="instagram">
                                <a target="_blank" href="https://www.instagram.com/petguardioes"><img src="/img/instagram1.png" alt="instagram"></a>
                            </div>
                            <div class="rede" id="twitter">
                                <a target="_blank" href="https://www.twitter.com/"><img src="/img/twitter1.png" alt="twitter"></a>                    
                            </div>         
                        </div>
                    </div> 

                </div>
                                                
                <div class="col-lg-5 col-md-5 col-sm-12 pr-5">
                    <h5>Quer conversar com a gente?</h5><br>
                    <form action="chat.php" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" name="nome" placeholder="Nome">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="E-mail">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="3" placeholder="Mensagem"></textarea>
                        </div>
                        <button class="btn-roxo" type="submit">ENVIAR</button>
                    </form>
                </div>

            </div>

        </section>
    </footer>
<!--FINAL DO FOOTER-->


<!-- Script JS Bootstrap | Manter código próximo ao fechamento do body -->

</body>
</html>