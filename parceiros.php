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
<body>
    <?php include_once("includes/header.php")?>
    <main>
        <section>
            <div class="jumbotron parceiros d-flex">
                <h1 class="display-4 d-flex flex-row justify-content-center align-items-end"><span id="titulo-jumbo-parceiros">Seja um de nossos parceiros!</span></h1>
            </div>
        </section>
        <section>
            <h1 id="titulo-carousel-parceiros">Conheça alguns de nossos parceiros!</h1>
            <div id="carouselExampleInterval" class="carousel slide bg-light" data-ride="carousel">
                <div class="carousel-inner d-flex shadow p-3 mb-5 bg-white rounded">
                    <div class="carousel-item active" data-interval="1000">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-sm-4">
                                <img src="img/parceiros/cobasi.png" class="d-block w-100 " alt="logo loja cobasi">
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-sm-4">
                                <img src="img/parceiros/petz.png" class="d-block w-100 " alt="logo loja petz">
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-sm-4 d-flex align-items-center">
                                <img src="img/parceiros/drhato.png" class="d-block w-100 " alt="logo loja Dr. Hato">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" data-interval="1000">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-sm-4">
                                <img src="img/parceiros/amigobicho.png" class="d-block w-100 " alt="Logo Ong Amigo Bicho">
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-sm-4">
                                <img src="img/parceiros/farmaciavet.png" class="d-block w-100 " alt="Logo loja Farmácia veterinário">
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-sm-4 d-flex align-items-center">
                                <img src="img/parceiros/institutomel.png" class="d-block w-100 " alt="Logo Instituto Luisa Mel">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" data-interval="1000">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-sm-4">
                                <img src="img/parceiros/viralata.png" class="d-block w-100 " alt="Logo ONG vira-lata">
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-sm-4">
                                <img src="img/parceiros/vetsatai.png" class="d-block w-100 " alt="Logo Veterinário Satai">
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-sm-4 d-flex align-items-center">
                                <img src="img/parceiros/vicioanimal.png" class="d-block w-100 " alt="Logo ONG Vicion Animal">
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only bg-dark">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only bg-dark">Next</span>
                </a>
            </div>
        </section>
        <h3 class="d-flex justify-content-center align-items-center p-5">Seja um de nossos parceiros preenchendo o formulário abaixo</h3>
        <section class="container d-flex justify-content-center align-items-center">
            <form method="POST" action="#">
                <div class="row">
                    <div class="form-group col-lg-3 col-md-3 col-sm3 col-xs-3">
                        <label>Nome Social/Jurídico:</label>
                        <input type="text" class="form-control" name="nome" placeholder="Digite seu nome">
                    </div>
                    <div class="form-group col-lg-3 col-md-3 col-sm3 col-xs-3">
                        <label>CPF ou CNPJ:</label><br>
                        <input type="text" class="form-control" name="cpfCnpj" placeholder="Digite seu CPF ou CNPJ">
                    </div>
                    <div class="form-group col-lg-3 col-md-3 col-sm3 col-xs-3">
                        <label>E-mail:</label><br>
                        <input type="email" class="form-control" name="email" placeholder="Digite seu e-mail">
                    </div>
                    <div class="form-group col-lg-3 col-md-3 col-sm3 col-xs-3">
                        <label>Telefone:</label><br>
                        <input type="telefone" class="form-control" name="telefone" placeholder="(00) 0000-0000">
                    </div>
                </div>
                <textarea type="text" rows="5" class="form-control p-5"placeholder="Deixe sua mensagem aqui" name="mensagem"></textarea>
                <button type="submit" class="btn btn-outline-info m-5">Quero ser um Parceiro!</button>
            </form> 
        </section>
        <?php include_once("includes/footer.php");?>
    </main>
<!--JAVASCRIPT BOOTSTRAP-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>