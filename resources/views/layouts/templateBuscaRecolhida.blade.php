<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="/img/escudo.png" sizes="32x32" rel="shortcut icon"/>
    <link href="/css/styles.css" rel="stylesheet"/>
    <link href='https://fonts.googleapis.com/css?family=Rockwell' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Satisfy&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.5.95/css/materialdesignicons.min.css">
    <title>@yield('title')</title>
</head>
<body>
    
<!--HEADER-->
<header class="fixed-top">

<div class="container col-12 pt-2 pb-2">

    <nav class="navbar navbar-expand-lg navbar-dark header-menu">

        <a class="fonteHeader" href="/home">
            <img src="/img/escudo.png" alt="Guardiões Pet" width="35" class="d-inline-block align-center">
            Guardiões Pet
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
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

                @guest
                <li class="nav-item">
                    <a class="nav-link header-link" href="/login">Login</a>
                </li>
                <li class="nav-item">
                    <a href="/cadastre-se" class="header-link"><button type="button"
                            class="btn-roxo">Cadastre-se</button></a>
                </li>
                    @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->email }}
                        <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                        <a class="dropdown-item" href=@switch (Auth::user()->user_group_id)
                            @case(1)
                            'admin'
                            @case (2)
                            {{ url('ong/edita/'. Auth::user()->id) }}
                            @case(3)
                            {{ url('guardiao/minhaconta/perfil/'. Auth::user()->id) }}
                            @endswitch

                            >
                            {{ __('Minha conta') }}
                        </a>

                        <a class="dropdown-item" href="/logout" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="/logout" method="POST" style="">
                            @csrf
                        </form>


                    </div>


                </li>
                @endguest

            </ul>

        </div>

    </nav>
</div>
</header>
<!--FINAL DO HEADER-->

<main>
    @yield('content')
</main>

        <!--Busca recolhida-->
        <div class="alinhamento-busca-recolhida mt-5">
            <section id="container-busca-recolhida" class="col-10">
                <div class="row d-flex flex-row justify-content-between align-items-center" id="busca-recolhida-titulo">
                    <h2>Encontre um amigo</h2>
                    <button class="ico-seta-expande-busca" data-toggle="collapse" data-target="#collapseExample">&#8250;
                    </button>
                </div>

                <div class="row collapse" id="collapseExample">
                    <form action="/busca" method="GET" class="pt-3 col pb-2">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 p-3">
                            <select name="animal" class="form-control">
                                <!-- Em todos os options selected, o value precisa ser nulo para não interferir no resultado da busca quando o campo não for selecionado.-->
                                <option selected value="">Pet</option>
                                <option value="Cachorro">Cachorro</option>
                                <option value="Gato">Gato</option>
                            </select>
                            </div>
                            <div class="buscaRecolAjudar col-md-6 p-3">
                                <select name="como_quero_ajudar" class="form-control">
                                    <option selected value="">Como quer ajudar?</option>
                                    <option value="adocao">Adoção</option>
                                    <option value="apadrinhamento">Apadrinhamento</option>
                                    <option value="lar_temporario">Lar temporário</option>
                                </select>
                            </div>
                            <div class="buscaRecolPorte col-md-6 p-3">
                                <select name="porte" class="form-control">
                                    <option selected value="">Porte</option>
                                    <option value="pequeno">Pequeno</option>
                                    <option value="medio">Médio</option>
                                    <option value="grande">Grande</option>
                                </select>
                            </div>
                            <div class="buscaReclOng col-md-6 p-3">
                                <select name="ong" class="form-control">
                                    <option selected value="">Selecionar a ONG</option>
                                    @foreach($ngos ?? '' as $ngo)
                                        <option value="{{$ngo->fantasy_name}}">{{$ngo->fantasy_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 p-3">
                                <select name="sexo" class="form-control">
                                    <option selected value="">Sexo</option>
                                    <option value="F">Fêmea</option>
                                    <option value="M">Macho</option>
                                </select>
                            </div>
                            <div class="buscaRecolBotao col-md-6 p-3">
                                <button class="btn-busca-recolhida" type="submit" name="procurar">Procurar</button>
                            </div>
                        </div>

                    </form>
                </div>
            </section>
        </div>

<!--FOOTER-->
    <footer>
        <section class="container">
            <div class="row pt-4">
                <div class="col-md-7">
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
                                                
                <div class="col-md-5 pr-5">
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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>