@extends('layouts.templateMenuLateral')

@section('title')
    Guardiões Pet | Cadastro Guardião
@endsection

@section('content')

        <form action="" class="card col-lg-8 col-md-12 col-sm-12 col-12 p-5" id="formGuardiao" style="width: 50rem">
            <!-- essa div é para o título -->
            <div class="form-group d-flex justify-content p-2">
                <h3 class="tituloGuardiao">Cadastro de Guardião</h3>
            </div>
            <!--aqui começa o formulário -->
            <div class="form-group row">
                <label for="nomeGuardiao" class="col-sm-4 col-form-label">Nome </label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nomeGuardiao" placeholder="Nome completo">
                </div>
            </div>
            <div class="form-group row">
                <label for="apelido" class="col-sm-4 col-form-label">Apelido </label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="apelido"
                        placeholder="Como nome irá aparecer para outros usuários">
                </div>
            </div>
            <div class="form-group row">
                <label for="data" class="col-sm-4 col-form-label">Data de Nascimento </label>
                <div class="col-sm-8">
                    <input type="date" class="form-control" id="data">
                </div>
            </div>
            <div class="form-group row">
                <label for="emailGuardiao" class="col-sm-4 col-form-label">E-mail</label>
                <div class="col-sm-8">
                    <input type="email" class="form-control" id="emailGuardiao" placeholder="seunome@email.com">
                </div>
            </div>
            <div class="form-group row">
                <label for="telefone" class="col-sm-4 col-form-label">Telefone </label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="telefone" placeholder="(xx) xxxxx-xxxx">
                </div>
            </div>
            <div class="form-group row">
                <label for="fotoGuardiao" class="col-sm-4 col-form-label">Foto de Perfil</label>
                <div class="col-sm-8">
                    <input type="file" class="form-control-file" id="fotoGuardiao">
                </div>
            </div>
            <div class="form-group row">
                <label for="senhaGuardiao" class="col-sm-4 col-form-label">Defina uma senha</label>
                <div class="col-sm-8">
                    <input type="password" class="form-control" id="senhaGuardiao"
                        placeholder="Senha mínimo 6 caracteres">
                </div>
            </div>
            <div class="form-group row">
                <label for="senhaConfirmGuardiao" class="col-sm-4 col-form-label">Confirme sua senha</label>
                <div class="col-sm-8">
                    <input type="password" class="form-control" id="senhaGuardiaoConfirm"
                        placeholder="Confirme sua senha">
                </div>
            </div>
            <div class="form-group row">
                <label for="enderecoGuardiao" class="col-sm-4 col-form-label">Endereço</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="enderecoGuardiao" placeholder="Rua/Avenida/Logradouro">
                </div>
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
            <div class="form-group row p-3">
                <label for="textoGuardiao">Fale sobre você</label>
                <textarea class="form-control" id="textoGuardiao" cols="30" rows="10"
                    placeholder="Descreva por que você quer ser um(a) Guardião(ã)"></textarea>
            </div>
            <div>
            <button type="submit" class="btn btn-roxo btnGuardiao">Salvar cadastro</button>
            </div>
        </form>

@endsection