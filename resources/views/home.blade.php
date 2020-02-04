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
        <section id="container-busca-expandida" class="col-sm-10 col-xs-6">
            <div class="row justify-content-center">
                <div class="col-11">
                    <h2>Encontre um amigo</h2>
                </div>
                <div class="formulario-coluna col-11">
                    <form method="GET" action="/busca">
                    @csrf
                        <div class="formulario-index row">
                            <div class="formPet formulario-index-itens col-md-6 p-3">
                                <select name="type" class="form-control">
                                    <option disabled selected>Pet</option>
                                    <option value="Cachorro">Cachorro</option>
                                    <option value="Gato">Gato</option>
                                </select>
                            </div>
                            <div class="formAjudar formulario-index-itens col-md-6 p-3">
                                <select name="comoQueroAjudar" class="form-control">
                                    <option disabled selected>Como quer ajudar?</option>
                                    <option value="adoption_available">Adoção</option>
                                    <option value="sponsorship_available">Apadrinhamento</option>
                                    <option value="temporary_home_available">Lar temporário</option>
                                </select>
                            </div>
                        
                            <div class="formulario-index-itens col-md-6 p-3">
                                <select name="animal_bearing" class="form-control">
                                    <option disabled selected>Porte</option>
                                    <option value="pequeno">Pequeno</option>
                                    <option value="medio">Médio</option>
                                    <option value="grande">Grande</option>
                                </select>
                            </div>
                            <div class="formulario-index-itens col-md-6 p-3">
                                <select name="ong" class="form-control"><!--puxar todas as ongs cadastradas no bd-->
                                    <option disabled selected>Selecionar a ONG</option>
                                    <option value="ong-a">ONG $A</option>
                                    <option value="ong-b">ONG $B</option>
                                    <option value="ong-c">ONG $C</option>
                                </select>
                            </div>
                        
                            <div class="formSexo formulario-index-itens col-md-6 p-3">
                                <select name="sex" class="form-control">
                                    <option disabled selected>Sexo</option>
                                    <option value="F">Fêmea</option>
                                    <option value="M">Macho</option>
                                </select>
                            </div>
                            <div class="formBotao formulario-index col-md-6 p-3">
                                <button class="btn-roxo formulario-index-itens btn-busca-expandida botao-home" type="submit" name="procurar">Procurar</button>
                            </div>
                        </div>
                       
                    </form>
                </div>
            </div>
        </section>
        <!-- Fechando seção da busca da home. -->
        <!-- Abrindo seção "Por que ser um Guardião PET?". -->
        <section id="seja-guardiao-home" class="col-lg-11 col-md-12 col-sm-12 col-xs-6">
            <h2>Por que ser um Guardião PET</h2>
            <p>Todos os dias as ONGs resgatam e cuidam de milhares de bichinhos. É um trabalho feito com muito amor e dedicação, mas que é exaustivo e custoso também.</p> 
            <p>Há sempre muito mais animais do que as organizações suportam . O tempo de espera pela adoção varia muito e alguns nem chegam a ganhar uma família :(</p>
            <p>Para ser um Guardião, você pode adotar, oferecer um lar temporário ou então apadrinhar um animal, com mimos que deixarão ele feliz e saudável, que tal?</p>
        </section>
        <!-- Fechando seção "Por que ser um Guardião PET?". -->
        <!-- Abrindo seção "Como funciona". -->
        <section id="como-funciona-home" class="col-lg-12 col-md-12 col-sm-12 col-xs-6">
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
        <section id="doacoes-home" class="col-lg-11 col-md-12 col-sm-11 col-xs-6">
            <h2>Tem itens para doação? Ajude!</h2>
            <p>Roupinhas, remédios, ração...tá sobrando na sua casa? Tem muitas organizações - e muitos guardiões também! - precisando de todo tipo de item para cuidar e alimentar gatinhos e cachorros. Veja quais as necessidades e se você pode contribuir!</p>
            <div class="row justify-content-center">
                <a href="anuncios"><button class="btn-roxo botao-home">Quero doar</button></a>
            </div>
        </section>
        <!-- Fechando seção "Doações". -->
    </section>
@endsection