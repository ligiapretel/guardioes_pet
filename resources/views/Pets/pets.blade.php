@extends ('layouts.templateGuardioes')

@section ('title')
    Guardiões Pet | Perfil do animal
@endsection

@section('content')
    <section id="perfil-animal">
        <!--H1 que ficara ativado somente no mobile -->
        <!-- <h1 class="text-center">Bernardo</h1> -->
        <div class="container">
            <div id="perfil-anim-cx-info" class="row justify-content-center">
                <div id="dados-animal" class="col-11 col-sm-6 col-md-6 col-lg-6 col-xl-5">
                    <h1>Bernardo</h1>
                    <p><b>Idade</b>: 3 anos</p>
                    <p><b>Sexo</b>: macho</p>
                    <p><b>Porte</b>: grande</p>
                    <p><b>Temperamento</b>: dócil, brincalhão</p>
                    <p><b>Sociável com outros animais</b>: não</p>
                    <p><b>Sociável com crianças</b>: sim</p>
                    <p><b>Outras informações</b>: tem medo de dormir sozinho, gosta de morder sapatos</p>
                    <br>

                    <div class="row" id="perfil-anim-icon-msgm-respos">
                        <div>
                            <a href="#"><img class="mb-2" id="perfil_anim_icon-msgm" src="/img/icon_mail.png"></a>
                        </div>
                        <div id="perfil-anim-msgm-respons" class="col-9 col-sm-10 col-md-9 col-lg-10 col-xl-10">
                            <p>Quer perguntar algo sobre mim?<br>Envie uma mensagem!</p>
                        </div>
                    </div>

                </div>
                <div id="perfil-anim-cx-img" class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <div class="container">
                        <div class="row">
                            <div id="perfil-animal-carrossel" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#perfil-animal-carrossel" data-slide-to="0"
                                        class="active rounded-circle"></li>
                                    <li data-target="#perfil-animal-carrossel" data-slide-to="1" class="rounded-circle">
                                    </li>
                                    <li data-target="#perfil-animal-carrossel" data-slide-to="2" class="rounded-circle">
                                    </li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100 rounded" src="/img/perfil_animal_01.jpg"
                                            alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100 rounded" src="/img/perfil_animal_02.jpg"
                                            alt="Photo by Holly Bartley on Unsplash">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100 rounded" src="/img/perfil_animal_03.jpg"
                                            alt="Photo by Bogdan Todoran on Unsplash">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-between mt-1">
                            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 pl-0">
                                <img class="perfil-anim-icon-respos" src="/img/icon_whatsapp.png" alt="">
                                <img class="perfil-anim-icon-respos" src="/img/icon_facebook.png" alt="">
                                <img class="perfil-anim-icon-respos" src="/img/icon_twitter.png" alt="">
                                <p class="d-inline"><a href="#">Compartilhar</a></p>
                            </div>

                            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 pr-0 text-right">
                                <p class="d-inline"><a href="#">Favoritar</a></p>
                                <img class="perfil-anim-icon-respos col-1 pr-0 pl-0 ml-1" src="/img/like_no.png">
                            </div>
                        </div>
                        <div class="row justify-content-between mt-4">
                            <div class="cx-btn-respons">
                                <a href="login"><button class="btn-roxo text-uppercase w-100">Adotar</button></a>
                            </div>
                            <div class="cx-btn-respons">
                                <button class="perfil-anim-btn-desativado w-100"
                                    title="Opção indisponível no momento">Lar
                                    temporário</button>
                            </div>
                            <div class="cx-btn-respons">
                                <a href="login"><button
                                        class="btn-roxo text-uppercase w-100">Apadrinhar</button></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>

    <section class="perfil-animal-sobre">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-11 pt-5 pb-5 text-justify">
                    <h2 class="mb-5">Sobre mim</h2>
                    <p>Ele foi encontrado em meio a Rodovia Fernão Dias, atropelado e sem conseguir se levantar. No
                        veterinário, o prognóstico é que ele não andaria mais, mas pra quem quer viver, isso não é nada
                        né?</p>
                    <p>Olhem aí, todo lindo e andando normalmente. Por causa da idade, sua adoção é difícil, mas
                        garantimos que isso é só um número, o Manoel é bem forte e tem muitos anos pela frente. Então,
                        se você não tem preconceito e tem o coração aberto pra receber muito amor, adota esse lindão!
                    </p>
                </div>
            </div>
        </div>
    </section>


    <section class="pt-5 pb-5" id="apadrinhar">
        <div class="container d-flex-justify-content-center">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-11 text-justify">
                    <h2 class="mb-5">Fazer uma doação</h2>
                    <p>Não pode me adotar nem me abrigar, mas quer me ajudar? Meus tios e tias estão sempre precisando
                        de ração e outras coisinhas, que tal? Lá na página de anúncios da instituição que cuida de mim
                        você pode ver do que eles estão precisando.</p>
                    <p>Ah, e você também pode entrar em contato com eles se quiser doar alguma quantia em dinheiro</p>
                </div>
            </div>
            <div class="row justify-content-between m-0 pt-5 col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="col-4 col-sm-4 col-md-3 col-lg-3 col-xl-3 ">
                    <a href="anuncios.php">
                        <figure class="figure">
                            <img src="/img/perfil_doar_01.jpg" class="figure-img img-fluid rounded rounded-circle"
                                alt="Photo by Autri Taheri on Unsplash">
                            <figcaption class="figure-caption text-center">Shampoo</figcaption>
                        </figure>
                    </a>
                </div>
                <div class="col-4 col-sm-4 col-md-3 col-lg-3 col-xl-3 ">
                    <a href="anuncios.php">
                        <figure class="figure">
                            <img src="/img/perfil_doar_02.jpg" class="figure-img img-fluid rounded rounded-circle"
                                alt="Photo by Matthew Henry on Unsplash">
                            <figcaption class="figure-caption text-center">Antipulgas</figcaption>
                        </figure>
                    </a>
                </div>
                <div class="col-4 col-sm-4 col-md-3 col-lg-3 col-xl-3 ">
                    <a href="anuncios.php">
                        <figure class="figure">
                            <img src="/img/perfil_doar_03.jpg" class="figure-img img-fluid rounded rounded-circle"
                                alt="Photo by Camylla Battani on Unsplash">
                            <figcaption class="figure-caption text-center">Ração</figcaption>
                        </figure>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection

