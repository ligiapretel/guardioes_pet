@extends('layouts.templateGuardioes')

@section('title')
    Guardiões Pet | Cadastro Guardião
@endsection

@section('content') 

        <form action="/guardiao/cadastrar" method="POST" enctype="multipart/form-data" class="card col-lg-8 col-md-12 col-sm-12 col-12 p-5" id="formGuardiao" style="width: 50rem" data-parsley-validate="">
            @csrf
            <!-- Código somente para testes de erro no preenchimento do form. Quando estiver ok, melhorar essa exibição para o usuário -->
            @if(!empty($errors->all()))
                <script>alert('existem erros.' @foreach($errors->all() as $message) +"\n {{ $message }}" @endforeach)</script>
            @endif

            <!-- input hidden com status de Status e user_type de Users_group -->
            <input hidden type="text" name="statusGuardian"  value="1"> 
            <input hidden type="text" name="user_typeGuardian" value="3">

            @if(session("success"))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{session("success")}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
          
            @endif

            @if(session("error"))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>{{session("error")}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif




            <!-- essa div é para o título -->
            <div class="form-group d-flex justify-content p-2">
                <h3 class="tituloGuardiao">Cadastro de Guardião</h3>
            </div>
            <!--aqui começa o formulário -->
            <div class="form-group row">
                <label for="name" class="col-sm-4 col-form-label">Nome </label>
                <div class="col-sm-8">
                    <input name="name" value="{{ old("name", '') }}" type="text" class="form-control" id="nomeGuardiao" placeholder="Nome completo" required="">
                </div>
            </div>
            <div class="form-group row">
                <label for="nickname" class="col-sm-4 col-form-label">Apelido </label>
                <div class="col-sm-8">
                    <input name="nickname" value="{{ old("nickname", '') }}" type="text" class="form-control" id="apelido"
                        placeholder="Como nome irá aparecer para outros usuários">
                </div>
            </div>
            <div class="form-group row">
                <label for="date_of_birth" class="col-sm-4 col-form-label">Data de Nascimento </label>
                <div class="col-sm-8">
                    <input name="date_of_birth" value="{{ old("date_of_birth", '') }}" type="date" class="form-control" id="data" required="">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-4 col-form-label">E-mail</label>
                <div class="col-sm-8">
                    <input name="email" value="{{ old("email", '') }}" type="email" class="form-control" id="emailGuardiao" placeholder="seunome@email.com" data-parsley-trigger="change" required="">
                </div>
            </div>
            <div class="form-group row">
                <label for="phone_number" class="col-sm-4 col-form-label">Telefone </label>
                <div class="col-sm-8">
                    <input name="phone_number" value="{{ old("phone_number", '') }}" type="text" class="form-control" id="telefone" placeholder="(xx) xxxxx-xxxx" required="">
                </div>
            </div>
            <div class="form-group row">
                <label for="profile_picture" class="col-sm-4 col-form-label">Foto de Perfil</label>
                <div class="col-sm-8">
                    <input name="profile_picture" value="{{ old("profile_picture", '') }}" type="file" class="form-control-file" id="fotoGuardiao" required="">
                </div>
            </div>
            <div class="form-group row">
                <label for="senhaGuardiao" class="col-sm-4 col-form-label">Defina uma senha</label>
                <div class="col-sm-8">
                    <input name="senhaGuardiao" value="{{ old("senhaGuardiao", '') }}" type="password" class="form-control" id="senhaGuardiao"
                        placeholder="Senha mínimo 6 caracteres" equalto="" required="" >
                </div>
            </div>
            <div class="form-group row">
                <label for="senhaConfirmGuardiao" class="col-sm-4 col-form-label">Confirme sua senha</label>
                <div class="col-sm-8">
                    <input name="senhaConfirmGuardiao" value="{{ old("senhaConfirmGuardiao", '') }}" type="password" class="form-control" id="senhaGuardiaoConfirm"
                        placeholder="Confirme sua senha" data-parsley-trigger="change" equalto="senhaGuardiao" required="">
                </div>
            </div>
            <div class="form-group row">
                <label for="zip_code" class="col-sm-4 col-form-label">CEP</label>
                <div class="col-sm-8">
                    <input name="zip_code" value="{{ old("zip_code", '') }}" type="number" class="form-control" id="cep" placeholder="CEP" required="">
                </div>
            </div>
            <div class="form-group row">
                <label for="address" class="col-sm-4 col-form-label">Endereço</label>
                <div class="col-sm-8">
                    <input name="address" value="{{ old("address", '') }}" type="text" class="form-control" id="rua" placeholder="Rua/Avenida/Logradouro" required="">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6 p-1">
                    <label for="number">Número</label>
                    <input name="number" value="{{ old("number", '') }}" type="text" class="form-control" id="telefone" placeholder="No." required="">
                </div>
                <div class="form-group col-md-6 p-1">
                    <label for="complement">Complemento</label>
                    <input name="complement" value="{{ old("complement", '') }}" type="text" class="form-control" id="complementoGuardiao" placeholder="Ex.: Bloco B">
                </div>
                
                <div class="form-group col-md-6 p-1">
                    <label for="neighborhood">Bairro</label>
                    <input name="neighborhood" value="{{ old("neighborhood", '') }}" type="text" class="form-control" id="bairro" placeholder="Bairro" required="">
                </div>
                <div class="form-group col-md-6 p-1">
                    <label for="city">Cidade</label>
                    <input name="city" value="{{ old("city", '') }}" type="text" class="form-control" id="cidade" placeholder="Cidade">
                </div>
                <div class="form-group col-md-6 p-1">
                    <label for="state">Estado</label>
                    <input name="state" value="{{ old("state", '') }}" type="text" class="form-control" id="uf" placeholder="">

                    {{-- <select name="state" class="form-control" id="uf">
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
                    </select> --}}
                </div>
            </div>
            <div class="form-group row p-3">
                <label for="about_the_guardian">Fale sobre você</label>
                <textarea name="about_the_guardian" class="form-control" id="textoGuardiao" value="{{ old("state", '') }}" cols="30" rows="10"
                    placeholder="Descreva por que você quer ser um(a) Guardião(ã)"></textarea>
            </div>
            <div>
            <button type="submit" class="btn btn-roxo btnGuardiao">Salvar cadastro</button>
            </div>
            
        </form>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="/js/parsley.js"    type="text/javascript"></script>
<script src="/js/completaCep.js" type="text/javascript"></script>
{{-- <script src="/js/mascaraTel.js" type="text/javascript"></script> --}}
@endsection