@extends('layouts.templateGuardioes')

@section('title')
    Guardiões Pet
@endsection

@section('content')

<section id="main-home">
    <!-- Carrossel Home -->
    <section>
        <div id="carrossel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/img_banner_home01.jpg" class="d-block w-100" alt="Foto: Manja Vitolic | Unsplash">
                </div>
                <div class="carousel-item">
                    <img src="img/img_banner_home02.jpg" class="d-block w-100" alt="Foto: Jesse Schoff | Unsplash">
                </div>

                <div class="carousel-item">
                    <img src="img/img_banner_home03.jpg" class="d-block w-100" alt="Foto: Hannah Troupe | Unsplash">
                </div>
                <div class="carousel-caption titulo-carrossel-home">
                    <p>Adote, abrigue, ajude, seja um guardião</p>
                    <h1>Quer cuidar de mim?</h1>
                </div>
            <a class="carousel-control-prev" href="#carrossel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <!-- <span class="sr-only">Previous</span> -->
            </a>
            <a class="carousel-control-next" href="#carrossel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <!-- <span class="sr-only">Next</span> -->
            </a>
        </div>
    </section>
    <!-- Fechando seção do carrossel da home. -->
    <!-- Abrindo seção quer permite fazer busca pelo perfil do animal. -->
    <section id="container-busca-expandida" class="col-6 col-sm-10">
        <div class="row justify-content-center">
            <div class="col-11">
                <h2>Encontre um amigo</h2>
            </div>
            <div class="formulario-coluna col-11">
                <form action="/busca" method="GET">
                @csrf
                    <div class="formulario-index row">
                        <div class="formPet formulario-index-itens col-md-6 p-3">
                            <select name="animal" class="form-control">
                                <!-- Em todos os options selected, o value precisa ser nulo para não interferir no resultado da busca quando o campo não for selecionado.-->
                                <option selected value="">Pet</option>
                                <option value="Cachorro">Cachorro</option>
                                <option value="Gato">Gato</option>
                            </select>
                        </div>
                        <div class="formAjudar formulario-index-itens col-md-6 p-3">
                            <select name="como_quero_ajudar" class="form-control">
                                <option selected value="">Como quer ajudar?</option>
                                <option value="adocao">Adoção</option>
                                <option value="apadrinhamento">Apadrinhamento</option>
                                <option value="lar_temporario">Lar temporário</option>
                            </select>
                        </div>
                    
                        <div class="formulario-index-itens col-md-6 p-3">
                            <select name="porte" class="form-control">
                                <option selected value="">Porte</option>
                                <option value="pequeno">Pequeno</option>
                                <option value="medio">Médio</option>
                                <option value="grande">Grande</option>
                            </select>
                        </div>
                        <div class="formulario-index-itens col-md-6 p-3">
                            <select name="ong" class="form-control">
                                <option selected value="">Selecionar a ONG</option>
                                @foreach($ngos as $ngo)
                                    <option value="{{$ngo->fantasy_name}}">{{$ngo->fantasy_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    
                        <div class="formSexo formulario-index-itens col-md-6 p-3">
                            <select name="sexo" class="form-control">
                                <option selected value="">Sexo</option>
                                <option value="F">Fêmea</option>
                                <option value="M">Macho</option>
                            </select>
                        </div>
                        <div class="formBotao formulario-index col-md-6 p-3">
                            <button class="btn-roxo formulario-index-itens btn-busca-expandida botao-home" type="submit">Procurar</button>
                        </div>
                    </div>
                   
                </form>
            </div>
        </div>
    </section>
    <!-- Fechando seção da busca da home. -->
    <!-- Abrindo seção "Por que ser um Guardião PET?". -->
    <section id="seja-guardiao-home" class="col-6 col-sm-12 col-lg-11">
        <h2>Por que ser um Guardião PET</h2>
        <p>Todos os dias as ONGs resgatam e cuidam de milhares de bichinhos. É um trabalho feito com muito amor e dedicação, mas que é exaustivo e custoso também.</p> 
        <p>Há sempre muito mais animais do que as organizações suportam . O tempo de espera pela adoção varia muito e alguns nem chegam a ganhar uma família :(</p>
        <p>Para ser um Guardião, você pode adotar, oferecer um lar temporário ou então apadrinhar um animal, com mimos que deixarão ele feliz e saudável, que tal?</p>
        <a href="/guardiao/guardioes">
            <button type="button" class="btn-roxo m-4">CONHEÇA NOSSOS GUARDIÕES</button>
        </a>
    </section>
    <!-- Fechando seção "Por que ser um Guardião PET?". -->
    <!-- Abrindo seção "Como funciona". -->
    <section id="como-funciona-home" class="col-6 col-sm-12">
        <div class="row justify-content-center">
            <h2>Como funciona?</h2>
        </div>
        <div class="row justify-content-around">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                <img src="img/img_lar_temp_home.jpg" class="img-opcoes-guardiao img-fluid" alt="Lar temporário">
                <h4>Lar temporário</h4>
                <p>Dê casa, comida e amor enquanto os peludos não são adotados. Um guardião que também tem a missão de ajudar a encontrar uma família permanente.</p>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                <img src="img/img_adocao_home.jpg" class="img-opcoes-guardiao img-fluid" alt="Adoção">
                <h4>Adoção</h4>
                <p>Há milhares de gatinhos e cachorros só esperando um casa para chamar de sua. Busque o perfil ideal e ganhe um amigo para a vida toda.</p>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                <img src="img/img_apadrinhe_home.jpg" class="img-opcoes-guardiao img-fluid" alt="Apadrinhamento">
                <h4>Apadrinhamento</h4>
                <p>Não pode adotar nem dar um lar temporário? Contribua para o bem estar dos animais doando para as organizações selecionadas pelo Guardiões PET.</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <a href="#container-busca-expandida"><button class="btn-roxo botao-home">Encontre um amigo</button></a>
        </div>
    </section>
    <!-- Fechando seção "Como funciona". -->
    <!-- Abrindo seção "Doações". -->
    <section id="doacoes-home" class="col-6 col-sm-11 col-md-12 col-lg-11">
        <h2>Tem itens para doação? Ajude!</h2>
        <p>Roupinhas, remédios, ração...tá sobrando na sua casa? Tem muitas organizações - e muitos guardiões também! - precisando de todo tipo de item para cuidar e alimentar gatinhos e cachorros. Veja quais as necessidades e se você pode contribuir!</p>
        <div class="row justify-content-center">
            <a href="anuncios"><button class="btn-roxo botao-home">Quero doar</button></a>
        </div>
    </section>
    <!-- Fechando seção "Doações". -->
</section>
@endsection