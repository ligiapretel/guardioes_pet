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
    <link href="https://fonts.googleapis.com/css?family=Satisfy&display=swap" rel="stylesheet">
    <title>Guardiões Pet | Parceiros</title>
</head>

<body>
    <?php include_once("includes/header.php")?>
    <main class="d-flex flex-column justify-content-center">
        <section id="banner-parceiros" class="col-12">
            <h1 class="col-9 col-sm-6 col-md-6 col-l-5">Sua empresa ou instituição pode ser parceira e ajudar animais, ONGs e guardiões de muitas formas.</h1>
        </section>
        <section>
            <h1 id="titulo-carousel-parceiros">Conheça alguns de nossos parceiros</h1>
            <div id="carrossel" class="carousel slide" data-ride="carousel" data-interval="4000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/parceiros/slide01_xl.jpg" class="d-none d-sm-none d-md-block w-100" alt="Parceiros">
                        <img src="img/parceiros/slide01_xs.jpg" class="d-block d-md-none d-lg-none d-xl-none w-100" alt="Parceiros">
                    </div>
                    <div class="carousel-item">
                        <img src="img/parceiros/slide02_xl.jpg" class="d-none d-sm-none d-md-block w-100" alt="Parceiros">
                        <img src="img/parceiros/slide02_xs.jpg" class="d-block d-md-none d-lg-none d-xl-none w-100" alt="Parceiros">
                    </div>
                    <div class="carousel-item">
                        <img src="img/parceiros/slide03_xl.jpg" class="d-none d-sm-none d-md-block w-100" alt="Parceiros">
                        <img src="img/parceiros/slide03_xs.jpg" class="d-block d-md-none d-lg-none d-xl-none w-100" alt="Parceiros">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carrossel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </a>
                <a class="carousel-control-next" href="#carrossel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </a>
            </div>
        </section>
        <section id="form-parceiros">
            <div class="row d-flex justify-content-around px-md-5">
                <div class="col-12 col-md-6 col-lg-5 text-right">
                    <h2>Ficou interessado?</h2>
                    <p>Se você se identifica com essa causa e quer contribuir com o projeto, registre seu interesse no formulário ao lado. Retornaremos seu contato propondo opções de parceria.</p>
                </div>
                <div class="col-12 col-md-6 col-lg-5">
                    <form method="POST" action="#">
                        <input type="text" class="form-control mb-3" name="nome-parceria" placeholder="Nome">
                        <input type="text" class="form-control mb-3" name="empresa-parceria" placeholder="Empresa">
                        <input type="email" class="form-control mb-3" name="email-parceria" placeholder="E-mail">
                        <input type="telefone" class="form-control mb-3" name="telefone-parceria"
                            placeholder="Telefone (00) 0000-0000">
                        <textarea type="text" rows="5" class="form-control mb-3"
                            placeholder="Que tipo de parceria você gostaria de propor?"
                            name="mensagem-parceria"></textarea>
                        <div class="row justify-content-center justify-content-md-end">
                            <button type="submit" class="mr-md-3">Quero ser um parceiro</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <?php include_once("includes/footer.php")?>
    <!--JAVASCRIPT BOOTSTRAP-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>