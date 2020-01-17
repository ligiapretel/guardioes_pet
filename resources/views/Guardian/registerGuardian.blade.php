@extends('layouts.templateGuardioes')

@section('title')
    Guardiões Pet | Cadastro Guardião
@endsection

@section('content') 

        <form action="/cadastroGuardiao" method="POST" enctype="multipart/form-data" class="card col-lg-8 col-md-12 col-sm-12 col-12 p-5" id="formGuardiao" style="width: 50rem">
            @csrf

            <!-- input hidden com status de Status e user_type de Users_group -->
            <input hidden type="text" name="statusGuardian"  value="ativo"> 
            <input hidden type="text" name="user_typeGuardian" value="3">

            <!-- essa div é para o título -->
            <div class="form-group d-flex justify-content p-2">
                <h3 class="tituloGuardiao">Cadastro de Guardião</h3>
            </div>
            <!--aqui começa o formulário -->
            <div class="form-group row">
                <label for="name" class="col-sm-4 col-form-label">Nome </label>
                <div class="col-sm-8">
                    <input name="name" type="text" class="form-control" id="nomeGuardiao" placeholder="Nome completo">
                </div>
            </div>
            <div class="form-group row">
                <label for="nickname" class="col-sm-4 col-form-label">Apelido </label>
                <div class="col-sm-8">
                    <input name="nickname" type="text" class="form-control" id="apelido"
                        placeholder="Como nome irá aparecer para outros usuários">
                </div>
            </div>
            <div class="form-group row">
                <label for="date_of_birth" class="col-sm-4 col-form-label">Data de Nascimento </label>
                <div class="col-sm-8">
                    <input name="date_of_birth" type="date" class="form-control" id="data">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-4 col-form-label">E-mail</label>
                <div class="col-sm-8">
                    <input name="email" type="email" class="form-control" id="emailGuardiao" placeholder="seunome@email.com">
                </div>
            </div>
            <div class="form-group row">
                <label for="phone_number" class="col-sm-4 col-form-label">Telefone </label>
                <div class="col-sm-8">
                    <input name="phone_number" type="text" class="form-control" id="telefone" placeholder="(xx) xxxxx-xxxx">
                </div>
            </div>
            <div class="form-group row">
                <label for="profile_picture" class="col-sm-4 col-form-label">Foto de Perfil</label>
                <div class="col-sm-8">
                    <input name="profile_picture" type="file" class="form-control-file" id="fotoGuardiao">
                </div>
            </div>
            <div class="form-group row">
                <label for="senhaGuardiao" class="col-sm-4 col-form-label">Defina uma senha</label>
                <div class="col-sm-8">
                    <input name="senhaGuardiao" type="password" class="form-control" id="senhaGuardiao"
                        placeholder="Senha mínimo 6 caracteres">
                </div>
            </div>
            <div class="form-group row">
                <label for="senhaConfirmGuardiao" class="col-sm-4 col-form-label">Confirme sua senha</label>
                <div class="col-sm-8">
                    <input name="senhaConfirmGuardiao" type="password" class="form-control" id="senhaGuardiaoConfirm"
                        placeholder="Confirme sua senha">
                </div>
            </div>
            <div class="form-group row">
                <label for="address" class="col-sm-4 col-form-label">Endereço</label>
                <div class="col-sm-8">
                    <input name="address" type="text" class="form-control" id="enderecoGuardiao" placeholder="Rua/Avenida/Logradouro">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6 p-1">
                    <label for="number">Número</label>
                    <input name="number" type="number" class="form-control" id="numeroGuardiao" placeholder="No.">
                </div>
                <div class="form-group col-md-6 p-1">
                    <label for="complement">Complemento</label>
                    <input name="complement" type="number" class="form-control" id="complementoGuardiao" placeholder="Ex.: Bloco B">
                </div>
                <div class="form-group col-md-6 p-1">
                    <label for="zip_code">CEP</label>
                    <input name="zip_code" type="number" class="form-control" id="cepGuardiao" placeholder="CEP">
                </div>
                <div class="form-group col-md-6 p-1">
                    <label for="neighborhood">Bairro</label>
                    <input name="neighborhood" type="text" class="form-control" id="bairroGuardiao" placeholder="Bairro">
                </div>
                <div class="form-group col-md-6 p-1">
                    <label for="city">Cidade</label>
                    <input name="city" type="text" class="form-control" id="cidadeGuardiao" placeholder="Cidade">
                </div>
                <div class="form-group col-md-6 p-1">
                    <label for="state">Estado</label>
                    <select name="state" class="form-control" id="estadoGuardiao">
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
                <label for="about_the_guardian">Fale sobre você</label>
                <textarea name="about_the_guardian" class="form-control" id="textoGuardiao" cols="30" rows="10"
                    placeholder="Descreva por que você quer ser um(a) Guardião(ã)"></textarea>
            </div>
            <div>
            <button type="submit" class="btn btn-roxo btnGuardiao">Salvar cadastro</button>
            </div>
            <div>
                <button type="reset" class="btn btn-danger ">Deletar cadastro</button>
            </div>
        </form>

{{-- Teste de erro --}}
<div class="row justify-content-center ml-5">
    <div class="col-md-12">
        @if(isset($result))
            @if($result)
                <h3>Cadastro realizado com sucesso!</h3>
            @else
                <h3>Não foi possível realizar o cadastro.</h3>
            @endif
        @endif
    </div>
</div>
        

@endsection