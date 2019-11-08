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

    <!--Onde esta localizado as informacoes do Guardiao e img-->
    <section  class="container-fluid" id="pfG_cx_info_principal"> 
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 d-flex justify-content-center">
                <img id="perfilGua_imagem" class="rounded-circle" src="img/img_perfil_guardiao.jpeg">
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-12"> 
                <h1 class="pfOngGuard_titulo text-dark font-weight-bolder">Claudia Leite</h1>
                <p class="text-dark text-justify">Nossa ONG nasceu com intenções claras de resgate, castração e doação de animais. Nos empenhamos em
                    abrigar poucos, socorrer vários e castrar MUITOS, pois a castração é a única solução ao problema
                    estrutural da procriação de animais abandonados.</p>
                <p class="text-dark text-justify">Nossa ONG é formada por profissionais liberais, gente comum que trabalha, estuda, enfim, vive!</p>
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
    <section class="container-fluid" id="perfilOngGuar_animais"> 
        <div class="row">
            <h2 class="col-lg-12 text-dark font-weight-bold pfOngGuard_titulo">Apadrinhados</h2>

            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="card">
                    <img src="img/pfGuardiao_img1.jpg" class="card-img-top" height="300" width="300">
                    <div class="card-body">
                    <h4 class="card-title text-dark font-weight-bold">Elza</h4>
                        <p class="card-text text-secondary">Tenho uma pelagem de tres cores que é puro charme e pra completar uma carinha inocente que é i-rre-sis-tível!Adoro tomar um solzinho na janela e tirar cochilos na ...</p>
                        <a href="#" class="btn btn-primary">Saiba mais</a> <!-- ainda preciso arrumar o botão -->
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="card">
                    <img src="img/pfGuardiao_img_2.jpg" class="card-img-top" height="300" width="300">
                    <div class="card-body">
                    <h4 class="card-title text-dark font-weight-bold">Chico</h4>
                        <p class="card-text text-secondary">Tenho uma pelagem de tres cores que é puro charme e pra completar uma carinha inocente que é i-rre-sis-tível!Adoro tomar um solzinho na janela e tirar cochilos na ...</p>
                        <a href="#" class="btn btn-primary">Saiba mais</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="card">
                    <img src="img/pfGuardiao_img_3.jpeg" class="card-img-top" height="300" width="300">
                    <div class="card-body">
                        <h4 class="card-title text-dark font-weight-bold">Belquior</h4>
                        <p class="card-text text-secondary">Tenho uma pelagem de tres cores que é puro charme e pra completar uma carinha inocente que é i-rre-sis-tível!Adoro tomar um solzinho na janela e tirar cochilos na ...</p>
                        <a href="#" class="btn btn-primary">Saiba mais</a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!--Onde estão os animais adotados -->
    <section class="container-fluid bg-light" id="perfilOngGuar_animais"> 
        <div class="row">
            <h2 class="col-lg-12 text-dark font-weight-bold pfOngGuard_titulo">Adotados</h2>

            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="card">
                    <img src="img/pfGuardiao_img1.jpg" class="card-img-top" height="300" width="300">
                    <div class="card-body">
                    <h4 class="card-title text-dark font-weight-bold">Elza</h4>
                        <p class="card-text text-secondary">Tenho uma pelagem de tres cores que é puro charme e pra completar uma carinha inocente que é i-rre-sis-tível!Adoro tomar um solzinho na janela e tirar cochilos na ...</p>
                        <a href="#" class="btn btn-primary">Saiba mais</a> <!-- ainda preciso arrumar o botão -->
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="card">
                    <img src="img/pfGuardiao_img_2.jpg" class="card-img-top" height="300" width="300">
                    <div class="card-body">
                    <h4 class="card-title text-dark font-weight-bold">Chico</h4>
                        <p class="card-text text-secondary">Tenho uma pelagem de tres cores que é puro charme e pra completar uma carinha inocente que é i-rre-sis-tível!Adoro tomar um solzinho na janela e tirar cochilos na ...</p>
                        <a href="#" class="btn btn-primary">Saiba mais</a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!--Onde estão os animais lar temporário -->
    <section class="container-fluid" id="perfilOngGuar_animais"> 
        <div class="row">
            <h2 class="col-lg-12 text-dark font-weight-bold pfOngGuard_titulo">Lar Temporário</h2>

            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="card">
                    <img src="img/pfGuardiao_img1.jpg" class="card-img-top" height="300" width="300">
                    <div class="card-body">
                    <h4 class="card-title text-dark font-weight-bold">Elza</h4>
                        <p class="card-text text-secondary">Tenho uma pelagem de tres cores que é puro charme e pra completar uma carinha inocente que é i-rre-sis-tível!Adoro tomar um solzinho na janela e tirar cochilos na ...</p>
                        <a href="#" class="btn btn-primary">Saiba mais</a> <!-- ainda preciso arrumar o botão -->
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="card">
                    <img src="img/pfGuardiao_img_2.jpg" class="card-img-top" height="300" width="300">
                    <div class="card-body">
                    <h4 class="card-title text-dark font-weight-bold">Chico</h4>
                        <p class="card-text text-secondary">Tenho uma pelagem de tres cores que é puro charme e pra completar uma carinha inocente que é i-rre-sis-tível!Adoro tomar um solzinho na janela e tirar cochilos na ...</p>
                        <a href="#" class="btn btn-primary">Saiba mais</a>
                    </div>
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