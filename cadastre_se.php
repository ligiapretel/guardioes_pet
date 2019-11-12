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
    <title>Guardiões Pet | Cadastre-se</title>
</head>
<body>
    <!-- Incluindo header -->
    <?php include_once("includes/header.php")?>
    <main id="main-cadastre-se" >
        <div id="container-box-cadastre-se" class="col-lg-4 col-md-5 col-sm-5 col-xs-4">
            <div class="row justify-content-center bg-cadastre-se-ong">
                <img src="img/ico-cadastre-se-ong.png" alt="Cadastro da ONG" />
            </div>
            <div class="row justify-content-center">
                <div class="col-10 text-center">
                    <h1>ONG</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-10">
                    <p>Se você faz parte de alguma ONG e deseja publicar pets disponíveis para adoção, lar temporário, apadrinhamento ou solicitar itens para doação, realize agora mesmo seu cadastro e amplie as chances de seus animais encontrarem uma família.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="botaoCadOng col-10 text-center">
                <a href="cadastroOng.php"><button class="btn-busca-expandida" type="submit" name="cadastre-se-ong">Cadastro ONG</button></a>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-10 text-center">
                    <a href="login.php"><p class="tem-cadastro">Já tem um cadastro?</p></a>
                </div>
            </div>
        </div>
        <div id="container-box-cadastre-se" class="col-lg-4 col-md-5 col-sm-5 col-xs-4">
            <div class="row justify-content-center bg-cadastre-se-guardiao">
                <img src="img/ico-cadastre-se-guardiao.png" alt="Cadastro do Guardião" />
            </div>
            <div class="row justify-content-center">
                <div class="col-10 text-center">
                    <h1>Guardião</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-10">
                    <p>Se você quer reduzir o número de cães e gatos abandonados, seja através de uma adoção,lar temp orário, apadrinhando ou doando itens para quem precisa, você é um Guardião. Faça seu cadastro e ajude a transformar a vida de muitos pets.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-10 text-center">
                <a href="cadastroGuardiao.php"><button class="botaoCadGuardiao btn-busca-expandida cor-laranja" type="submit" name="cadastre-se-guardiao">Cadastro Guardião</button></a>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-10 text-center">
                    <a href="login.php"><p class="tem-cadastro">Já tem um cadastro?</p></a>
                </div>
            </div>
        </div>
    </main>
    <!-- Incluindo footer -->
    <?php include_once("includes/footer.php")?>
    <!-- Script JS Bootstrap | Manter código próximo ao fechamento do body -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>