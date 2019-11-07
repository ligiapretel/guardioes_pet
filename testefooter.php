<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Adote, abrigue, ajude. Seja um guardião pet. Encontre o cão ou gato que combina com seu perfil e ajude ONGs a transformarem a vida desses bichinhos.">
    <meta name="author"
        content="Aline Naoe, Anaê Ross, Chaiana Hermes, Claudia Leite, Ligia Pretel Eimantas, Luana Solimeno">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="img/escudo.png" sizes="32x32" rel="shortcut icon" />
    <link href="css/styles.css" rel="stylesheet" />
    <link href='https://fonts.googleapis.com/css?family=Rockwell' rel='stylesheet' type='text/css'>
    <title>Guardiões Pet | Perfil Animal</title>
</head>

<body>
    <?php include_once('includes/header.php');?>
    <section id="perfil-animal">
        <div class="container">
            <div class="row justify-content-center pt-5 pb-5">
                <div id="dados-animal" class="col-5">
                    <h1>Bernardo</h1>
                    <p><b>Idade</b>: 3 anos</p>
                    <p><b>Sexo</b>: macho</p>
                    <p><b>Porte</b>: grande</p>
                    <p><b>Temperamento</b>: dócil, brincalhão</p>
                    <p><b>Sociável com outros animais</b>: não</p>
                    <p><b>Sociável com crianças</b>: sim</p>
                    <p><b>Outras informações</b>: tem medo de dormir sozinho, gosta de morder sapatos</p>
                    <br>

                    <div class="row">
                        <div class="col">
                            <img src="img/icon_mail.png" class="w-100">
                        </div>
                        <div class="col-10">
                            <p>Quer perguntar algo sobre mim?<br>Envie uma mensagem!</p>
                        </div>
                    </div>

                </div>
                <div class="col-6">
                    <div class=container>
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
                                        <img class="d-block w-100 rounded" src="img/perfil_animal_01.jpg"
                                            alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100 rounded" src="img/perfil_animal_02.jpg"
                                            alt="Photo by Holly Bartley on Unsplash">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100 rounded" src="img/perfil_animal_03.jpg"
                                            alt="Photo by Bogdan Todoran on Unsplash">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-between mt-1">
                            <div class="col-6 pl-0">
                                <img src="img/icon_whatsapp.png" alt="">
                                <img src="img/icon_facebook.png" alt="">
                                <img src="img/icon_twitter.png" alt="">
                                <p class="d-inline">Compartilhar</p>
                            </div>

                            <div class="col-6 pr-0 text-right">
                                <p class="d-inline">Favoritar</p>
                                <img src="img/like_no.png" class="col-1 pr-0 pl-0 ml-1">
                            </div>
                        </div>
                        <div class="row justify-content-between mt-4">
                            <div>
                                <button class="btn-envio">Adotar</button>
                            </div>
                            <div>
                                <button class="btn-desativado" title="Opção indisponível no momento">Lar
                                    temporário</button>
                            </div>
                            <div id=botao-apadrinhar>
                                <button class="btn-envio"><a href="#apadrinhar">Apadrinhar</a></button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>

    <section class="perfil-animal">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-11 pt-5 pb-5">
                    <h2>Sobre mim</h2>
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
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-11">
                    <h2>Fazer uma doação</h2>
                    <p>Não pode me adotar nem me abrigar, mas quer me ajudar? Meus tios e tias estão sempre precisando
                        de ração e outras coisinhas, que tal? Lá na página de anúncios da instituição que cuida de mim
                        você pode ver do que eles estão precisando.</p>
                    <p>Ah, e você também pode entrar em contato com eles se quiser doar alguma quantia em dinheiro</p>
                </div>
            </div>
            <div class="row justify-content-around pt-3 col-12">
                <div class="col-3">
                   <a href="http://localhost/guardioes_pet/anuncios.php">
                        <figure class="figure">
                            <img src="img/perfil_doar_01.jpg" class="figure-img img-fluid rounded rounded-circle"
                                alt="Photo by Autri Taheri on Unsplash">
                            <figcaption class="figure-caption text-center">Shampoo</figcaption>
                        </figure>
                    </a>
                </div>
                <div class="col-3">
                    <a href="http://localhost/guardioes_pet/anuncios.php">             
                        <figure class="figure">
                            <img src="img/perfil_doar_02.jpg" class="figure-img img-fluid rounded rounded-circle"
                                alt="Photo by Matthew Henry on Unsplash">
                            <figcaption class="figure-caption text-center">Antipulgas</figcaption>
                        </figure>
                    </a>
                </div>
                <div class="col-3">
                    <a href="http://localhost/guardioes_pet/anuncios.php">
                        <figure class="figure">
                            <img src="img/perfil_doar_03.jpg" class="figure-img img-fluid rounded rounded-circle"
                                alt="Photo by Camylla Battani on Unsplash">
                            <figcaption class="figure-caption text-center">Ração</figcaption>
                        </figure>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Abrindo seção para include da busca recolhida -->
    <div class="alinhamento-busca-recolhida mt-5">
        <section id="container-busca-recolhida" class="col-10">
            <?php include_once('includes/buscaRecolhida.php')?>
        </section>
    </div>

<!-- FOOTER TESTANDO  -->

<footer id="footer" class="coresFooter">
        <section class="container">
            <div class="row pt-4">
                <div class="col-7 d-flex">
                    <ul class="col-4 align-content-around list-unstyled">
                        <li class="espaco"><a class="linkFooter" href="index.php">Home</a></li>
                        <li class="espaco"><a class="linkFooter" href="index.php#seja-guardiao-home">Ser um guardião</a>
                        </li>
                        <li class="espaco"><a class="linkFooter" href="sobre.php">Sobre nós</a></li>
                        <li class="espaco"><a class="linkFooter" href="index.php#como-funciona-home">Como funciona?</a>
                        </li>
                        <li class="espaco"><a class="linkFooter" href="parceiros.php">Parceiros</a></li>
                        <li class="espaco"><a class="linkFooter" href="anuncios.php">Doações</a></li>
                        <a href="https://www.facebook.com/"><img class="img-fluid mt-5 p-2" src="img/facebook1.png"
                                width="25%" alt="facebook"></a>
                        <a href="https://www.instagram.com/"><img class="img-fluid mt-5 p-2" src="img/instagram1.png"
                                width="25%" alt="instagram"></a>
                        <a href="https://www.twitter.com/"><img class="img-fluid mt-5 p-2" src="img/twitter1.png"
                                width="25%" alt="twitter"></a>

                    </ul>

                    <ul class="col-8 list-unstyled">
                        <li class="espaco"><a class="linkFooter" href="#">Perguntas frequentes</a></li>
                        <li class="espaco"><a class="linkFooter" href="#">Política de privacidade</a></li>
                        <li class="espaco"><a class="linkFooter" href="#">Termos de uso</a></li>
                    </ul>
                </div>

                <div class="col-5 pr-5">
                    <h5>Quer conversar com a gente?</h5><br>
                    <form action="" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" name="nome" placeholder="Nome">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="E-mail">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="3" placeholder="Mensagem"></textarea>
                        </div>
                        <button class="btnFooter" type="submit">Enviar</button>
                    </form>
                </div>

                <div class="col-3 mb-5">
                </div>

            </div>

        </section>
    </footer>



    

</body>

</html>