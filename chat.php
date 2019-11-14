<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Adote, abrigue, ajude. Seja um guardião pet. Encontre o cão ou gato que combina com seu perfil e ajude ONGs a transformarem a vida desses bichinhos.">
    <meta name="author" content="Aline Naoe, Anaê Ross, Chaiana Hermes, Claudia Leite, Giuliana Gabrielli, Ligia Pretel Eimantas, Luana Solimeno">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="img/escudo.png" sizes="32x32" rel="shortcut icon" />
    <link href="css/styles.css" rel="stylesheet" />
    <link href='https://fonts.googleapis.com/css?family=Rockwell' rel='stylesheet' type='text/css'>
    <title>Guardiões Pet | Mensagens</title>
</head>

<body>
    <?php include_once("includes/header.php");?>
    <!-- <div class="row d-flex align-items-center mt-5 m-5 p-3">
        <div id="menu-ong" class="col-lg-3 col-md-3 col-sm-6 col-xs-6 mt-3">
            <div class="card" style="width: 20rem;">
                <img id="perfil-ong" src="img/foto_perfil_ong.jpg" alt="logo da ONG" />
                <div class="card-body" style="width: 20rem;">
                    <nav class="nav flex-column bg-light">
                        <a class="nav-link menu-ong active" href="#">Meu Perfil</a>
                        <a class="nav-link menu-ong" href="#">Animais Cadastrados</a>
                        <a class="nav-link menu-ong" href="#">Cadastrar Novos Animais</a>
                        <a class="nav-link menu-ong" href="#">Anúncios Cadastrados</a>
                        <a class="nav-link menu-ong" href="#">Cadastrar Novos Anúncios</a>
                        <a class="nav-link menu-ong" href="#">Mensagens</a>
                        <a class="nav-link menu-ong-sair" href="#">Sair</a>
                    </nav>
                </div>
            </div>
        </div> -->
    <!-- início do chat -->
    <main class="row" >
    <!-- include do menu lateral -->
    <?php include_once("includes/menu-ong.php")?> 
        <!-- Início do chat-->
        <section class="col-lg-3 col-md-3 col-sm-6 col-xs-6 m-5">
            <div class="card-body">
                <div class="mensagem-guardiao mt-5">
                    <img id="perfil-chat-guardiao" src="img/johndoe.png" alt="foto perfil guardião" />
                    <h6>John Doe</h6>
                    <p>Assunto: Lar Temporário</p>
                </div>
                <div class="mensagem-guardiao">
                    <img id="perfil-chat-guardiao" src="img/jane-doe.png" alt="foto perfil guardião" />
                    <h6>Jane Doe</h6>
                    <p>Assunto: Lar Temporário</p>
                </div>
                <div class="mensagem-guardiao">
                    <img id="perfil-chat-guardiao" src="img/fulano-doe.png" alt="foto perfil guardião" />
                    <h6>Fulano Doe</h6>
                    <p>Assunto: Lar Temporário</p>
                </div>
                <div class="mensagem-guardiao">
                    <img id="perfil-chat-guardiao" src="img/user.png" alt="foto perfil guardião" />
                    <h6>Mario Doe</h6>
                    <p>Assunto: Lar Temporário</p>
                </div>
                <div class="mensagem-guardiao">
                    <img id="perfil-chat-guardiao" src="img/maria-doe.png" alt="foto perfil guardião" />
                    <h6>Maria Doe</h6>
                    <p>Assunto: Lar Temporário</p>
                </div>
                <div>
                    <a class="nav-link menu-ong" href="#">Mais mensagens ↓</a>
                </div>
            </div>
        </section>
        <div id="box-chat" class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="d-flex justify-content-start align-items-center">
                <img id="perfil-chat-guardiao" src="img/johndoe.png" alt="foto perfil guardião" />
                <div class="d-flex flex-column">
                    <h6>John Doe</h6>
                    <p>Assunto: Lar Temporário</p>
                </div>
            </div>
            <hr>
            <p>15/10/2019</p>
            <h5>Mensagem:</h5>
            <p>Olá, tenho interesse em oferecer lar temporário ao <a href="#">Boris</a>.</p>
            <hr>
            <label>Responder:</label>
            <form>
                <textarea class="form-control" type="text" rows="10"
                    placeholder="Responder a mensagem do Guardião aqui." name=""></textarea>
                <button type="submit" class="btn btn-roxo-outline d-flex justify-content-end m-3">Responder</button>
            </form>
        </div>
    </div>
    </main>
    <?php include_once("includes/footer.php")?>
    <!-- Script JS Bootstrap | Manter código próximo ao fechamento do body -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>