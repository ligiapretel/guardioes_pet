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
    <title>Guardiões Pet | Cadastro ONG</title>
</head>

<body>
    <!-- include do header -->
    <?php include_once("includes/header.php")?>

    <!-- início do formulário -->
    <main class="row">
        <!-- include do menu lateral -->
        <!-- <?php include_once("includes/menu-ong.php")?>  -->
        <form action="" class="card col-lg-8 col-md-6 col-sm-6 col-xs-6 p-5" id="formOng">
            <!-- essa div é para o título -->
            <div class="form-group d-flex justify-content p-2">
                <h3 class="tituloOng">Cadastro de ONG</h3>
            </div>
            <!--aqui começa o formulário -->
            <div class="form-group row">
                <label for="nomeOng" class="col-sm-4 col-form-label">Nome da ONG</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nomeOng" placeholder="Nome da sua ONG">
                </div>
            </div>
            <div class="form-group row">
                <label for="cnpj" class="col-sm-4 col-form-label">CNPJ</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="cnpj" placeholder="Número do CNPJ da ONG">
                </div>
            </div>
            <div class="form-group row">
                <label for="fotoOng" class="col-sm-4 col-form-label">Foto de Perfil</label>
                <div class="col-sm-8">
                    <input type="file" class="form-control-file" id="fotoOng">
                </div>
            </div>
            <div class="form-group row">
                <label for="nomeResp" class="col-sm-4 col-form-label">Nome do Responsável</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nomeResp" placeholder="Nome do responsavel da ONG">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-4 col-form-label">E-mail</label>
                <div class="col-sm-8">
                    <input type="email" class="form-control" id="email" placeholder="seunome@email.com">
                </div>
            </div>
            <div class="form-group row">
                <label for="senhaOng" class="col-sm-4 col-form-label">Defina uma senha</label>
                <div class="col-sm-8">
                    <input type="password" class="form-control" id="senhaOng"
                        placeholder="Escolha sua senha de no mínimo 6 caracteres">
                </div>
            </div>
            <div class="form-group row">
                <label for="senhaConfirmOng" class="col-sm-4 col-form-label">Confirme sua senha</label>
                <div class="col-sm-8">
                    <input type="password" class="form-control" id="senhaOngConfirm" placeholder="Confirme sua senha">
                </div>
            </div>
            <div class="form-group row">
                <label for="enderecoOng" class="col-sm-4 col-form-label">Endereço</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="enderecoOng" placeholder="Rua/Avenida/Logradouro">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6 p-1">
                    <label for="numeroOng">Número</label>
                    <input type="number" class="form-control" id="numeroOng" placeholder="No.">
                </div>
                <div class="form-group col-md-6 p-1">
                    <label for="complementoOng">Complemento</label>
                    <input type="number" class="form-control" id="complementoOng" placeholder="Ex.: Bloco B">
                </div>
                <div class="form-group col-md-6 p-1">
                    <label for="cepOng">CEP</label>
                    <input type="number" class="form-control" id="cepOng" placeholder="CEP">
                </div>
                <div class="form-group col-md-6 p-1">
                    <label for="bairroOng">Bairro</label>
                    <input type="text" class="form-control" id="bairroOng" placeholder="Bairro">
                </div>
                <div class="form-group col-md-6 p-1">
                    <label for="cidadeOng">Cidade</label>
                    <input type="text" class="form-control" id="cidadeOng" placeholder="Cidade">
                </div>
                <div class="form-group col-md-6 p-1">
                    <label for="estadoOng">Estado</label>
                    <select class="form-control" id="estadoOng">
                        <option>Selecione</option>
                        <option>Acre</option>
                        <option>Alagoas</option>
                        <option>Amapá</option>
                        <option>Amazonas</option>
                        <option>Bahia</option>
                        <option>Ceará</option>
                        <option>Distrito Federal</option>
                        <option>Espírito Santo</option>
                        <option>Goiás</option>
                        <option>Maranhão</option>
                        <option>Mato Grosso</option>
                        <option>Mato Grosso do Sul</option>
                        <option>Minas Gerais</option>
                        <option>Pará</option>
                        <option>Paraíba</option>
                        <option>Paraná</option>
                        <option>Pernambuco</option>
                        <option>Piauí</option>
                        <option>Rio de Janeiro</option>
                        <option>Rio Grande do Norte</option>
                        <option>Rio Grando do Sul</option>
                        <option>Rondônia</option>
                        <option>Roraima</option>
                        <option>Santa Catarina</option>
                        <option>São Paulo</option>
                        <option>Sergipe</option>
                        <option>Tocantins</option>
                    </select>
                </div>
            </div>
            <div class="form-group form-row">
                <label for="texto">Fale sobre a ONG</label>
                <textarea class="form-control" id="texto" cols="30" rows="10"
                    placeholder="Descreva o trabalho desenvolvido pela ONG"></textarea>
            </div>
            <button type="submit" class="btn btn-secondary" id="botaoOng">Salvar cadastro</button>
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