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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="img/escudo.png" sizes="32x32" rel="shortcut icon" />
    <link href="css/styles.css" rel="stylesheet" />
    <link href='https://fonts.googleapis.com/css?family=Rockwell' rel='stylesheet' type='text/css'>
    <title>Guardiões Pet | Cadastro Anúncio</title>
</head>

<body>
    <!-- include do header -->
    <?php include_once("includes/header.php")?>

    <!-- início do formulário -->
    <main class="row">
        <!-- include do menu lateral -->
        <?php include_once("includes/menu-ong.php")?> 
        <form method="POST" action="" class="card col-lg-8 col-md-6 col-sm-6 col-xs-6 p-5" id="formAnuncio">
            <!-- essa div é para o título -->
            <div class="form-group d-flex justify-content p-2">
                <h3 class="tituloAnuncio">Cadastro de Anúncio</h3>
            </div>
            <!--aqui começa o formulário -->
            <!-- o nome do anunciante deve ser o mesmo do cadastro de Guardião. Linkar os dois pra aqui no anúncio já vir preenchido -->
            <div class="form-group row">
                <label for="nomeAnuncio" class="col-sm-4 col-form-label">Nome do Anunciante</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nomeAnuncio" placeholder="Nome do Cadastro">
                </div>
            </div>
            <p>Preciso de:</p>
            <div class="col-lg-12 col-md-6 col-sm-6 col-xs-6">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="medicamento" id="medicamento"
                        value="medicamento">
                    <label class="form-check-label" for="medicamento">Medicamentos</label>
                </div>
                <div class="row">
                    <label for="especifique" class="col-sm-4 col-form-label">Especifique</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="especifique"
                            placeholder="Ex.: Antipulgas, Vermífugo">
                    </div>
                    <label for="quantidade" class="col-sm-4 col-form-label">Quantidade</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control mt-1" id="quantidade" placeholder="Ex.: 2">
                    </div>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="higiene" id="higiene" value="higiene">
                    <label class="form-check-label" for="higiene">Produtos de Higiene</label>
                </div>
                <div class="row">
                    <label for="especifique" class="col-sm-4 col-form-label">Especifique</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="especifique"
                            placeholder="Ex.: Fraldas, Tapetes Higiênicos">
                    </div>
                    <label for="quantidade" class="col-sm-4 col-form-label">Quantidade</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control mt-1" id="quantidade" placeholder="Ex.: 2">
                    </div>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="alimentos" id="alimentos" value="alimentos">
                    <label class="form-check-label" for="alimentos">Alimentos</label>
                </div>
                <div class="row">
                    <label for="especifique" class="col-sm-4 col-form-label">Especifique</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="especifique"
                            placeholder="Ex.: Ração comum, Ração para obesos">
                    </div>
                    <label for="quantidade" class="col-sm-4 col-form-label">Quantidade</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control mt-1" id="quantidade" placeholder="Ex.: 2">
                    </div>
                </div>

                <div class="form-group row">
                    <input class="form-check-input" type="checkbox" name="brinquedo" id="brinquedo" value="brinquedo">
                    <label for="brinquedo" class="col-sm-4 col-form-label">Brinquedos</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control mt-1" id="brinquedos" placeholder="Ex.: Bola, Corda">
                    </div>
                </div>

                <div class="form-group row">
                    <input class="form-check-input" type="checkbox" name="acessorio" id="acessorio" value="acessorio">
                    <label for="acessório" class="col-sm-4 col-form-label">Acessórios</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control mt-1" id="acessórios"
                            placeholder="Ex.: Camas, Coleiras, Guias">
                    </div>
                </div>

                <div class="form-group row">
                    <input class="form-check-input" type="checkbox" name="outros" id="outros" value="outros">
                    <label for="outros" class="col-sm-4 col-form-label">Outros</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" id="outros" cols="30" rows="10"
                            placeholder="Descreva"></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-secondary" id="botaoAnuncio">Salvar anúncio</button>
            </div>

        </form>
    </main>
    <!-- incluindo o footer -->
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