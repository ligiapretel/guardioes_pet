


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Cadastro ONG</title>
</head>
<body>
    <!-- include do header -->
    <main>
        <form action="" class="p-5">
            <!-- essa div é para o título -->
            <div class="form-group d-flex justify-content p-2">
                <h3>Cadastro de ONG</h3>
            </div>
            <!--aqui começa o formulário -->
            <div class="form-group row">
                <label for="nomeOng">Nome da ONG</label>
                <input type="text" class="form-control" id="nomeOng" placeholder="Nome da sua ONG">
            </div>
            <div class="form-group row">
                <label for="cnpj">CNPJ</label>
                <input type="text" class="form-control" id="cnpj" placeholder="Número do CNPJ da ONG">
            </div>
            <div class="form-group row">
                <label for="fotoOng">Foto de Perfil</label>
                <input type="file" class="form-control-file" id="fotoOng" >
            </div>
            <div class="form-group row">
                <label for="nomeResp">Nome do Responsável</label>
                <input type="text" class="form-control" id="nomeResp" placeholder="Nome do responsavel da ONG">
            </div>
            <div class="form-group row">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" id="email" placeholder="seunome@email.com">
            </div>
            <div class="form-group row">
                <label for="senhaOng">Defina uma senha</label>
                <input type="password" class="form-control" id="senhaOng" placeholder="Escolha sua senha de no mínimo 6 caracteres">
            </div>
            <div class="form-group row">
                <label for="senhaConfirmOng">Confirme sua senha</label>
                <input type="password" class="form-control" id="senhaOng" placeholder="Confirme sua senha">
            </div>
            <div class="form-group row">
                <label for="enderecoOng">Endereço</label>
                <input type="text" class="form-control" id="enderecoOng" placeholder="Rua/Avenida/Logradouro">
            </div>
            <div class="form-group row">
                <label for="numeroOng">Número</label>
                <input type="number" class="form-control" id="numeroOng" placeholder="No.">
            </div>
            <div class="form-group row">
                <label for="complementoOng">Complemento</label>
                <input type="number" class="form-control" id="complementoOng" placeholder="Ex.: Bloco B">
            </div>
            <div class="form-group row">
                <label for="cepOng">CEP</label>
                <input type="number" class="form-control" id="cepOng" placeholder="CEP">
            </div>
            <div class="form-group row">
                <label for="bairroOng">Bairro</label>
                <input type="text" class="form-control" id="bairroOng" placeholder="Bairro">
            </div>
            <div class="form-group row">
                <label for="cidadeOng">Cidade</label>
                <input type="text" class="form-control" id="cidadeOng" placeholder="Cidade">
            </div>
            <div class="form-group row">
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
            <div class="form-group row">
                <label for="texto">Fale sobre a ONG</label>
                <textarea class="form-control" id="texto" cols="30" rows="10" placeholder="Descreva o trabalho desenvolvido pela ONG"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Salvar cadastro</button>
        </form>
    </main>
</body>
</html>