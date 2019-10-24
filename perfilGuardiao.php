<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perfil do Guardiao</title>
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.5.95/css/materialdesignicons.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css" />

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

    <?php include_once("includes/footer.php");?>



</body>

</html>