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
    <title>Guardiões Pet | Login</title>
</head>
<body>
    <!-- Incluindo header -->
    <?php include_once("includes/header.php")?>
    <main id="main-login">
        <div id="container-form-login" class="col-4">
            <form action="#" method="POST">
                <div class="row justify-content-center">
                    <div class="col-10 text-center">
                        <h1>Acesse sua conta</h1>
                    </div>
                    <div class="col-10 p-2">
                        <input class="form-control" type="text" name="login" placeholder="E-mail">
                    </div>
                    <div class="col-10 p-2">
                        <input class="form-control" type="password" name="senha" placeholder="Senha">
                    </div>
                    <div class="col-10 p-2">
                        <button class="btn-busca-expandida" type="submit" name="procurar">Entrar</button>
                    </div>
                </div>
                <div class="row justify-content-center align-items-baseline">
                    <div class="col-5 p-2">
                        <input type="checkbox" name="lembrar-dados" value="aceita-lembrar-dados">
                        <label class="label-lembrar-dados">Lembrar dados</label>
                    </div>
                    <div class="col-5 p-2">
                        <a class="esqueci-senha" href="#">
                            <p>Esqueci a senha</p>
                        </a>
                    </div>
                </div>
            </form>
            <div class="row justify-content-center">
                <div class="col-10 text-center">
                    <h2>ou cadastre-se</h2>
                </div>
                <div class="col-5 p-2 text-center">
                    <a href="cadastroOng.php"><button class="btn-login-enviar" type="submit" name="sou-ong">Sou
                            ONG</button></a>
                </div>
                <div class="col-5 p-2 text-center">
                    <a href="cadastroGuardiao.php"><button class="btn-login-enviar" type="submit"
                            name="sou-guardiao">Sou Guardião</button></a>
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