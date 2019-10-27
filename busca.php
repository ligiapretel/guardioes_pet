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
    <title>Guardiões Pet | Busca</title>
</head>

<body>
    <?php include_once('includes/header.php') ?>

    <!-- <section class="busca-reduzida mt-4">
        <div class="h-100">
            <img src="img/icon_search.png" class="h-100 p-2">
            <p class="d-inline text-white">Refazer busca</p>
        </div>
    </section> -->


    <section class="m-5">

        <div class="container resultados-busca">
            <h2>Deu match! 12 animais têm o perfil que você buscou. Conheça:</h2>
            <div class="card-deck row mt-5">


                <div class="card">
                    <a href="paginaAnimal.php">
                        <img src="img/perfil_animal_01.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Bernardo</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                        </div>
                    </a>
                </div>

                <div class="card">
                    <img src="img/perfil_animal_02.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Layla</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/perfil_animal_03.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Erasmo</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/perfil_animal_01.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Julio</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="card-deck row mt-5 mb-5">
                <div class="card">
                    <img src="img/perfil_animal_01.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Boris</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/perfil_animal_02.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Bela</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/perfil_animal_03.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Amora</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/perfil_animal_01.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Caetano</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>

        </div>

        <div class="row justify-content-center">
            <button class="btn-envio">Ver mais</button>
        </div>

    </section>
    <!-- Abrindo seção para include da busca recolhida -->
    <div class="alinhamento-busca-recolhida">
        <section id="container-busca-recolhida" class="col-10">
            <?php include_once('includes/buscaRecolhida.php')?>
        </section>
    </div>

    <?php include_once('includes/footer.php')?>
    <!-- Script JS Bootstrap | Manter código próximo ao fechamento do body -->
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