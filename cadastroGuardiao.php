<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/styles.css" rel="stylesheet"/>
    <title>Cadastro Guardião</title>
</head>

<body>
    <!-- include do header -->
    <?php include_once("includes/header.php")?>
    <!-- include do menu lateral -->
    <?php include_once("includes/menu-ong.php")?>
    <!-- início do formulário -->
    <main>
        <form action="" class="card col-lg-9 col-md-6 col-sm-6 col-xs-6 p-5" id="formGuardiao" style="width: 50rem">
            <!-- essa div é para o título -->
            <div class="form-group d-flex justify-content p-2">
                <h3>Cadastro de Guardião</h3>
            </div>
            <!--aqui começa o formulário -->
            <div class="form-group form-row">
                <label for="nomeGuardiao">Nome </label>
                <input type="text" class="form-control" id="nomeGuardiao" placeholder="Nome completo">
            </div>
            <div class="form-group form-row">
                <label for="apelido">Apelido </label>
                <input type="text" class="form-control" id="apelido"
                    placeholder="Como seu nome irá aparecer para outros usuários">
            </div>
            <div class="form-group form-row">
                <label for="data">Data de Nascimento </label>
                <input type="date" class="form-control" id="data">
            </div>
            <div class="form-group form-row">
                <label for="emailGuardiao">E-mail</label>
                <input type="email" class="form-control" id="emailGuardiao" placeholder="seunome@email.com">
            </div>
            <div class="form-group form-row">
                <label for="telefone">Telefone </label>
                <input type="text" class="form-control" id="telefone" placeholder="(xx) xxxxx-xxxx">
            </div>
            <div class="form-group form-row">
                <label for="fotoGuardiao">Foto de Perfil</label>
                <input type="file" class="form-control-file" id="fotoGuardiao">
            </div>
            <div class="form-group form-row">
                <label for="senhaGuardiao">Defina uma senha</label>
                <input type="password" class="form-control" id="senhaGuardiao"
                    placeholder="Escolha sua senha de no mínimo 6 caracteres">
            </div>
            <div class="form-group form-row">
                <label for="senhaConfirmGuardiao">Confirme sua senha</label>
                <input type="password" class="form-control" id="senhaGuardiao" placeholder="Confirme sua senha">
            </div>
            <div class="form-group form-row">
                <label for="enderecoGuardiao">Endereço</label>
                <input type="text" class="form-control" id="enderecoGuardiao" placeholder="Rua/Avenida/Logradouro">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6 p-1">
                    <label for="numeroGuardiao">Número</label>
                    <input type="number" class="form-control" id="numeroGuardiao" placeholder="No.">
                </div>
                <div class="form-group col-md-6 p-1">
                    <label for="complementoGuardiao">Complemento</label>
                    <input type="number" class="form-control" id="complementoGuardiao" placeholder="Ex.: Bloco B">
                </div>
                <div class="form-group col-md-6 p-1">
                    <label for="cepGuardiao">CEP</label>
                    <input type="number" class="form-control" id="cepGuardiao" placeholder="CEP">
                </div>
                <div class="form-group col-md-6 p-1">
                    <label for="bairroGuardiao">Bairro</label>
                    <input type="text" class="form-control" id="bairroGuardiao" placeholder="Bairro">
                </div>
                <div class="form-group col-md-6 p-1">
                    <label for="cidadeGuardiao">Cidade</label>
                    <input type="text" class="form-control" id="cidadeGuardiao" placeholder="Cidade">
                </div>
                <div class="form-group col-md-6 p-1">
                    <label for="estadoGuardiao">Estado</label>
                    <select class="form-control" id="estadoGuardiao">
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
                <div class="form-group row">
                    <label for="textoGuardiao">Fale sobre você</label>
                    <textarea class="form-control" id="textoGuardiao" cols="30" rows="10"
                        placeholder="Descreva por que você quer ser um(a) Guardião(ã)"></textarea>
                </div>
                <button type="submit" class="btn btn-secondary" id="botaoGuardiao">Salvar cadastro</button>
        </form>
    </main>
    <!-- incluindo o footer -->
    <?php include_once("includes/footer.php")?>
</body>

</html>