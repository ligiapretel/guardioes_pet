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
    <title>Guardiões Pet | Perfil do Guardião</title>
</head>

<body>

    <?php include_once("includes/header.php")?>

    <div>
        <!--Onde esta localizado as informacoes do Guardiao e img-->
        <section id="pfG_cx_info_principal" class="container-fluid">
            <div class="row" id="pfG_cx_info">

                <div class="col-lg-5 col-md-6" id="pfG_cx_img">
                    <div id="pfG_img"></div>

                </div>

                <div id="pfG_linha1" class="col-lg-1"></div>
                <div id="pfG_linha2" class="col-lg-1"></div>

                <div class="col-lg-5 col-md-6 " id="pfG_info">
                    <h1 id="pfG_info_titulo">Claudia Leite</h1>
                    <p>Nossa ONG nasceu com intenções claras de resgate, castração e doação de animais. Nos empenhamos
                        em
                        abrigar poucos, socorrer vários e castrar MUITOS, pois a castração é a única solução ao problema
                        estrutural da procriação de animais abandonados.</p>
                    <p>Nossa ONG é formada por profissionais liberais, gente comum que trabalha, estuda, enfim, vive!
                    </p>
                    <div id="pfG_cx_i_txt" class="d-flex align-items-center">
                        <i class="mdi mdi-email-outline"></i>
                        <p> Envie uma mensagem!</p>
                        <i class="mdi mdi-alert-outline"></i>
                        <p> Denunciar Perfil</p>

                    </div>

                </div>

            </div>
        </section>

        <!--Onde esta localizado os Animais Apadrinhados-->
        <section id="pfG_cx_animais" class="container-fluid">
            <div id="pfG_cx_animais_secundaria" class="row">
                <h1>APADRINHADOS</h1>
                <div id="pfG_animais">
                    <div class="col-lg-4 pfG_cards" id="pfG_animais_card1">
                        <div id="pfG_animais_img1" class="pfG_animais_imgs"></div>
                        <h1>ELZA</h1>

                        <p>Tenho uma pelagem de tres cores que é puro charme e pra completar uma carinha inocente que é
                            i-rre-sis-tível!Adoro tomar um solzinho na janela e tirar cochilos na ...</p>
                    </div>
                    <div class="col-lg-4 pfG_cards" id="pfG_animais_card2">
                        <div id="pfG_animais_img2" class="pfG_animais_imgs"></div>
                        <h1>CHICO</h1>
                        <p>Tenho uma pelagem de tres cores que é puro charme e pra completar uma carinha inocente que é
                            i-rre-sis-tível!Adoro tomar um solzinho na janela e tirar cochilos na ...</p>
                    </div>
                    <div class="col-lg-4 testando pfG_cards" id="pfG_animais_card3">
                        <div id="pfG_animais_img3" class="pfG_animais_imgs"></div>
                        <h1>BELCHIOR</h1>
                        <p>Tenho uma pelagem de tres cores que é puro charme e pra completar uma carinha inocente que é
                            i-rre-sis-tível!Adoro tomar um solzinho na janela e tirar cochilos na ...</p>
                    </div>



                </div>
            </div>
        </section>

        <section id="pfG_cx_adotados_lar_temp" class="container-fluid">
            <div class="row" id="pfG_adotados_cx_secudaria">
                <div class=" col-lg-6" id="pfG_cx_adotados">
                    <div id="pfG_adotados">
                        <h1>ADOTADOS</h1>
                        <div id="pfG_animais_img4" class="pfG_animais_imgs"></div>
                        <h1>BELCHIOR</h1>
                        <p>Tenho uma pelagem de tres cores que é puro charme e pra completar uma carinha inocente que é
                            i-rre-sis-tível!Adoro tomar um solzinho na janela e tirar cochilos na ...</p>
                    </div>
                </div>
                <div class=" col-lg-6 " id="pfG_cx_temp">
                    <div id="pfG_temp">
                        <h1>LAR TEMPORARIO</h1>
                        <div id="pfG_animais_img5" class="pfG_animais_imgs"></div>
                        <h1>ERASMO</h1>
                        <p>Tenho uma pelagem de tres cores que é puro charme e pra completar uma carinha inocente que é
                            i-rre-sis-tível!Adoro tomar um solzinho na janela e tirar cochilos na ...</p>
                    </div>
                </div>
            </div>

        </section>



    </div>

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