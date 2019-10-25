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
    <!--Para os icones -->
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.5.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="img/escudo.png" sizes="32x32" rel="shortcut icon" />
    <link href="css/styles.css" rel="stylesheet" />
    <link href='https://fonts.googleapis.com/css?family=Rockwell' rel='stylesheet' type='text/css'>
    <title>Guardiões Pet | Perfil da ONG</title>
</head>

<body>

    <!--Onde esta localizado as informacoes da ONG e img-->
    <section id="pfong_cx_info_principal" class="container-fluid">
        <div class="row" id="pfong_cx_info">
            <div class="col-lg-6 col-md-6 " id="pfong_info">
                <h1 id="pfong_info_titulo">Cia dos Miados e Latidos</h1>
                <p>Nossa ONG nasceu com intenções claras de resgate, castração e doação de animais. Nos empenhamos em
                    abrigar poucos, socorrer vários e castrar MUITOS, pois a castração é a única solução ao problema
                    estrutural da procriação de animais abandonados.</p>
                <p>Nossa ONG é formada por profissionais liberais, gente comum que trabalha, estuda, enfim, vive!</p>
                <div id="pfong_cx_i_txt" class="d-flex align-items-center">
                    <i class="mdi mdi-email-outline"></i>
                    <p>Quer conversar com a gente?<br> Envie uma mensagem!</p>

                </div>

            </div>
            <div class="col-lg-6 col-md-6 d-flex justify-content-center align-items-center" id="pfong_cx_img">
                <div id="pfong_img"></div>
            </div>
        </div>
    </section>

    <!--Onde esta localizado os Animais com a ONG-->
    <section id="pfong_cx_principal_animais" class="container-fluid">
        <div class="row" id="pfong_cx_animais">
            <h1 id="pfong_animais_titulo">Animais com a ONG (98)</h1>
            <div id="pfong_animais" class="d-flex">
                <div class="col-lg-4 pfong_cards" id="pfong_coluna_cardsUm">
                    <div>
                        <div id="pfong_animais_img1" class="pfong_animais_imgs"></div>
                        <h1>ELZA</h1>

                        <p>Tenho uma pelagem de tres cores que é puro charme e pra completar uma carinha inocente que é
                            i-rre-sis-tível!Adoro tomar um solzinho na janela e tirar cochilos na ...</p>
                    </div>
                </div>
                <div class="col-lg-4 testando pfong_cards" id="pfong_coluna_cardsDois">
                    <div id="pfong_animais_img2" class="pfong_animais_imgs"></div>
                    <h1>CHICO</h1>
                    <p>Tenho uma pelagem de tres cores que é puro charme e pra completar uma carinha inocente que é
                        i-rre-sis-tível!Adoro tomar um solzinho na janela e tirar cochilos na ...</p>
                </div>
                <div class="col-lg-4 testando pfong_cards" id="pfong_coluna_cardsTres">
                    <div id="pfong_animais_img3" class="pfong_animais_imgs"></div>
                    <h1>BELCHIOR</h1>
                    <p>Tenho uma pelagem de tres cores que é puro charme e pra completar uma carinha inocente que é
                        i-rre-sis-tível!Adoro tomar um solzinho na janela e tirar cochilos na ...</p>
                </div>

            </div>
            <div id="cx-btn" class="d-flex justify-content-end align-items-center">
                <button>Ver Mais</button>
            </div>
        </div>
    </section>

    <!--Onde a ONG coloco os itens que estao necessitando-->
    <section class="container-fluid" id="pfong_precisa_cx_principal">
        <div class="row" id="pfong_precisa_cx_secundaria">
            <h1>Estamos Precisando!</h1>
            <div id="pfong_cx_precisa">
                <div class="pfong_precisando">Antipulgas Bravecto</div>
                <div class="pfong_precisando">Antipulgas Bravecto</div>
                <div class="pfong_precisando">Antipulgas Bravecto</div>
                <div class="pfong_precisando">Antipulgas Bravecto</div>
                <div class="pfong_precisando">Antipulgas Bravecto</div>
                <div class="pfong_precisando">Antipulgas Bravecto</div>
                <div class="pfong_precisando">Antipulgas Bravecto</div>
                <div class="pfong_precisando">Antipulgas Bravecto</div>
                <div class="pfong_precisando">Antipulgas Bravecto</div>
            </div>

        </div>

    </section>
    <!-- Incluindo footer -->
    <?php include_once("includes/footer.php")?>
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