<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/styles.css"/>
    <title>Cadastro de Anúncios</title>
</head>
<body>
    <!-- include do header -->
    <?php include_once("includes/header.php")?>
    
    <!-- início do formulário -->
    <main class="row">
        <!-- include do menu lateral -->
        <?php include_once("includes/menu-ong.php")?> <form action="" class="card col-lg-8 col-md-6 col-sm-6 col-xs-6 p-5" id="formAnuncio" >
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
                    <input class="form-check-input" type="checkbox" name="medicamento" id="medicamento" value="medicamento">
                    <label class="form-check-label" for="medicamento">Medicamentos</label>
                </div>
                <div class="row">
                    <label for="especifique" class="col-sm-4 col-form-label">Especifique</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="especifique" placeholder="Ex.: Antipulgas, Vermífugo">
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
                        <input type="text" class="form-control" id="especifique" placeholder="Ex.: Fraldas, Tapetes Higiênicos">
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
                        <input type="text" class="form-control" id="especifique" placeholder="Ex.: Ração comum, Ração para obesos">
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
                        <input type="text" class="form-control mt-1" id="acessórios" placeholder="Ex.: Camas, Coleiras, Guias">
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
</body>
</html>