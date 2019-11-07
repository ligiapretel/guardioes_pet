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
    <?php include_once("includes/header.php"); ?>

    <!--Onde esta localizado as informacoes da ONG e img-->
    <section class="container-fluid" id="pfong_cx_info_principal"> <!-- id para background e padding -->
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 border-right border-dark"> <!-- falta corrigir a borda preta -->
                <h1 class="text-dark font-weight-bolder">Cia dos Miados e Latidos</h1>
                <p class="text-dark text-justify">Nossa ONG nasceu com intenções claras de resgate, castração e doação de animais. Nos empenhamos em
                    abrigar poucos, socorrer vários e castrar MUITOS, pois a castração é a única solução ao problema
                    estrutural da procriação de animais abandonados.</p>
                <p class="text-dark text-justify">Nossa ONG é formada por profissionais liberais, gente comum que trabalha, estuda, enfim, vive!</p>
                <div id="pfong_cx_i_txt" class="d-flex align-items-center justify-content-center">
                    <a href=""><i class="mdi mdi-email-outline"></i></a>
                    <h6 class="ml-2 mb-0 text-body font-weight-bold">Quer conversar com a gente?<br> Envie uma mensagem!</h6>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-12 d-flex justify-content-center">
                <img src="img/perfil_ong_imagem.png" width="300" height="300">
            </div>
        </div>
    </section>
    
    <!--Onde esta localizado os Animais com a ONG-->
    <section class="container-fluid" id="perfilOngGuar_animais"> <!-- id sobre padding -->
        <div class="row">
            <h2 class="col-lg-12 text-dark font-weight-bold">Animais com a ONG (98)</h2>

            <div class="col-lg-4">
                <div class="card">
                    <img src="img/pfGuardiao_img1.jpg" class="card-img-top" height="300" width="300"> <!-- arummar o tamanho dessa imagem -->
                    <div class="card-body">
                    <h4 class="card-title text-dark font-weight-bold">ELZA</h4>
                        <p class="card-text text-secondary">Tenho uma pelagem de tres cores que é puro charme e pra completar uma carinha inocente que é i-rre-sis-tível!Adoro tomar um solzinho na janela e tirar cochilos na ...</p>
                        <a href="#" class="btn-roxo">Saiba mais</a> <!-- ainda preciso arrumar o botão -->
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card">
                    <img src="img/pfGuardiao_img_2.jpg" class="card-img-top" height="300" width="300">
                    <div class="card-body">
                    <h4 class="card-title text-dark font-weight-bold">CHICO</h4>
                        <p class="card-text text-secondary">Tenho uma pelagem de tres cores que é puro charme e pra completar uma carinha inocente que é i-rre-sis-tível!Adoro tomar um solzinho na janela e tirar cochilos na ...</p>
                        <a href="#" class="btn-roxo">Saiba mais</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card">
                    <img src="img/pfGuardiao_img_3.jpeg" class="card-img-top" height="300" width="300">
                    <div class="card-body">
                        <h4 class="card-title text-dark font-weight-bold">BELQUIOR</h4>
                        <p class="card-text text-secondary">Tenho uma pelagem de tres cores que é puro charme e pra completar uma carinha inocente que é i-rre-sis-tível!Adoro tomar um solzinho na janela e tirar cochilos na ...</p>
                        <a href="#" class="btn-roxo">Saiba mais</a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!--Onde a ONG coloco os itens que estao necessitando-->
    <section class="container-fluid bg-light" id="pfong_precisa_cx_principal"> <!-- id para padding -->
        <div class="row">
            <h2 class="text-dark font-weight-bold">Estamos Precisando!</h2>
            <div class="col-lg-12 d-flex justify-content-around flex-wrap">
                <div class="pfong_precisando">Item 1</div>
                <div class="pfong_precisando">Item 2</div>
                <div class="pfong_precisando">Item 3</div>
                <div class="pfong_precisando">Item 4</div>
                <div class="pfong_precisando">Item 5</div> 
                <div class="pfong_precisando">Item 6</div> 
                <div class="pfong_precisando">Item 7</div> 
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