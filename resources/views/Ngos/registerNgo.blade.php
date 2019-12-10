@extends('layouts.templateMenuLateral')

@section('title')
    Guardiões Pet | Cadastro ONG
@endsection

@section('content')
        
        <form action="cadastroAnimal.php" class="card col-lg-8 col-md-12 col-sm-12 col-12 p-5" id="formOng">
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
                    <input type="text" class="form-control" id="nomeResp" placeholder="Responsavel da ONG">
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
                        placeholder="Senha minimo 6 caracteres">
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
            <div>
            <button type="submit" class="btn btn-roxo btnOng">Salvar cadastro</button>
            </div>
        </form>

@endsection