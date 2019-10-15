<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/styles.css" media="screen" />
    <link href="img/escudo.png" sizes="32x32" rel="shortcut icon"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Guardiões Pet</title>
</head>
<div class="row d-fle align-items-center">
<body>
    <header class="col-lg-3 col-md-3 col-sm-6 col-xs-6 p-5 m-2">
        <div class="card" style="width: 20rem;">
            <img id="perfil-ong" src="img/foto_perfil_ong.jpg" alt="logo da ONG"/>
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
    </header>    
    <section class="col-lg-3 col-md-3 col-sm-6 col-xs-6 m-5">
        <div class="card-body">
            <div class="mensagem-guardiao">
            <img id="perfil-chat-guardiao" src="img/johndoe.png" alt="foto perfil guardião"/>
                <h6>John Doe</h6>
                    <p>Assunto: Lar Temporário</p>
                </div>
                <div class="mensagem-guardiao">
                    <img id="perfil-chat-guardiao" src="img/jane-doe.png" alt="foto perfil guardião"/>
                    <h6>Jane Doe</h6>
                    <p>Assunto: Lar Temporário</p>
                </div>
                <div class="mensagem-guardiao">
                    <img id="perfil-chat-guardiao" src="img/fulano-doe.png" alt="foto perfil guardião"/>
                    <h6>Fulano Doe</h6>
                    <p>Assunto: Lar Temporário</p>
                </div>
                <div class="mensagem-guardiao">
                    <img id="perfil-chat-guardiao" src="img/user.png" alt="foto perfil guardião"/>
                    <h6>Mario Doe</h6>
                    <p>Assunto: Lar Temporário</p>
                </div>
                <div class="mensagem-guardiao">
                    <img id="perfil-chat-guardiao" src="img/maria-doe.png" alt="foto perfil guardião"/>
                    <h6>Maria Doe</h6>
                    <p>Assunto: Lar Temporário</p>
                </div>
                <div>
                    <a class="nav-link menu-ong" href="#">Mais mensagens ↓</a>
                </div>
            </div>                
        </section>
            <div  id="box-chat" class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="d-flex justify-content-start align-items-center">
                    <img id="perfil-chat-guardiao" src="img/johndoe.png" alt="foto perfil guardião"/>
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
                    <textarea class="form-control" type="text" rows="10" placeholder="Responder a mensagem do Guardião aqui." name=""></textarea>
                    <button type="submit" class="btn btn-outline-success d-flex justify-content-end m-3">Responder</button>
                </form>
                 </div>
    </div> 
</body>
</html>