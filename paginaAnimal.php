<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Adote, abrigue, ajude. Seja um guardião pet. Encontre o cão ou gato que combina com seu perfil e ajude ONGs a transformarem a vida desses bichinhos.">
    <meta name="author" content="Aline Naoe, Anaê Ross, Chaiana Hermes, Claudia Leite, Ligia Pretel Eimantas, Luana Solimeno">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="img/escudo.png" sizes="32x32" rel="shortcut icon"/>
    <link href="css/styles.css" rel="stylesheet"/>
    <link href='https://fonts.googleapis.com/css?family=Rockwell' rel='stylesheet' type='text/css'>
    <title>Guardiões Pet | Perfil Animal</title>
</head>
<body>
    <?php include_once('includes/header.php');?>
    <section>
        <div class="container" id="perfil-animal">       
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
                                    <li data-target="#perfil-animal-carrossel" data-slide-to="0" class="active rounded-circle"></li>
                                    <li data-target="#perfil-animal-carrossel" data-slide-to="1" class="rounded-circle"></li>
                                    <li data-target="#perfil-animal-carrossel" data-slide-to="2" class="rounded-circle"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                    <img class="d-block w-100 rounded" src="img/perfil_animal_01.jpg" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                    <img class="d-block w-100 rounded" src="img/perfil_animal_02.jpg" alt="Photo by Holly Bartley on Unsplash">
                                    </div>
                                    <div class="carousel-item">
                                    <img class="d-block w-100 rounded" src="img/perfil_animal_03.jpg" alt="Photo by Bogdan Todoran on Unsplash">
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
                                <button class="btn-desativado" title="Opção indisponível no momento">Lar temporário</button>
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
                    <p>Ele foi encontrado em meio a Rodovia Fernão Dias, atropelado e sem conseguir se levantar. No veterinário, o prognóstico é que ele não andaria mais, mas pra quem quer viver, isso não é nada né?</p> 
                    <p>Olhem aí, todo lindo e andando normalmente. Por causa da idade, sua adoção é difícil, mas garantimos que isso é só um número, o Manoel é bem forte e tem muitos anos pela frente. Então, se você não tem preconceito e tem o coração aberto pra receber muito amor, adota esse lindão!</p>
                </div>
            </div>
        </div>
    </section>


    <section class="pt-5 pb-5" id="apadrinhar">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-11">
                    <h2>Apadrinhar</h2>
                    <p>Não pode me adotar nem me abrigar, mas quer me ajudar? Meus tios e tias estão sempre precisando de ração e outras coisinhas, que tal? Lá na página de anúncios da instituição que cuida de mim você pode ver do que eles estão precisando.</p>
                    <p>Ah, e você também pode entrar em contato com eles se quiser doar alguma quantia em dinheiro</p>
                </div>
            </div>
            <div class="row justify-content-around pt-3 col-12">
                <div class="col-3">
                    <figure class="figure">
                    <img src="img/perfil_doar_01.jpg" class="figure-img img-fluid rounded rounded-circle" alt="Photo by Autri Taheri on Unsplash">
                    <figcaption class="figure-caption text-center">Shampoo</figcaption>
                    </figure>
                </div>
                <div class="col-3">
                    <figure class="figure">
                    <img src="img/perfil_doar_02.jpg" class="figure-img img-fluid rounded rounded-circle" alt="Photo by Matthew Henry on Unsplash">
                    <figcaption class="figure-caption text-center">Antipulgas</figcaption>
                    </figure>        
                </div>
                <div class="col-3">
                    <figure class="figure">
                    <img src="img/perfil_doar_03.jpg" class="figure-img img-fluid rounded rounded-circle" alt="Photo by Camylla Battani on Unsplash">
                    <figcaption class="figure-caption text-center">Ração</figcaption>
                    </figure>        
                </div>
            </div>
        </div>
    </section>


    <?php include_once('includes/footer.php')?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>