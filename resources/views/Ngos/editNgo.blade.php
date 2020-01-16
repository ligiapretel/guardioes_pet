@extends('layouts.templateMenuLateral')

@section('title')
    Guardiões Pet | Editar ONG
@endsection

@section('content')

        <form action="{{ url('/editaOng') }}" method="POST" class="card col-lg-8 col-md-12 col-sm-12 col-12 p-5" id="formOng">
        {{ csrf_field() }} <!--gera token de segurança - verifica se o usuário é autenticado-->
        
            <!-- essa div é para o título -->
            <div class="form-group d-flex justify-content p-2">
                <h3 class="tituloOng">Editar dados</h3>
            </div>
            <!--aqui começa o formulário -->
            <input  class="form-control" type="hidden"name="id" value="{{ isset($ngo['id']) ? $ngo['id'] : '' }}"/> <!--puxa o id da ong-->
            <div class="form-group row">
                <label for="socialNameNgo" class="col-sm-4 col-form-label">Nome da ONG</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="social_name" placeholder="Nome da sua ONG" value="{{ isset($ngo['social_name']) ? $ngo['social_name'] : '' }}"><!--se existir o dado mostra o valor-->
                </div>
            </div>
            <div class="form-group row">
                <label for="cnpjNgo" class="col-sm-4 col-form-label">CNPJ</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="cnpj" placeholder="Número do CNPJ da ONG" value="{{ isset($ngo['cnpj']) ? $ngo['cnpj'] : '' }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="pictureNgo" class="col-sm-4 col-form-label">Foto de Perfil</label>
                <div class="col-sm-8">
                    <input type="file" class="form-control-file" name="profile_picture" value="{{ isset($ngo['profile_picture']) ? $ngo['fileDir'] : '' }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="nameNgo" class="col-sm-4 col-form-label">Nome do Responsável</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="responsable_name" placeholder="Responsavel da ONG" value="{{ isset($ngo['responsable_name']) ? $ngo['responsable_name'] : '' }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="emailNgo" class="col-sm-4 col-form-label">E-mail</label>
                <div class="col-sm-8">
                    <input type="email" class="form-control" name="email" placeholder="seunome@email.com" value="{{ isset($ngo['email']) ? $ngo['email'] : '' }}">
                </div>
            </div>
            <div class="form-group row" id="campo">
                <label for="passwordNgo" class="col-sm-4 col-form-label">Defina uma senha</label>
                <div class="col-sm-6">
                    <input type="password" class="form-control pwd" name="password" value="password" placeholder="Nova senha minimo 6 caracteres"  value="{{ isset($ngo['user_id']) ? $ngo['user_id'] : '' }}">
                </div>
                <div class="col-sm-2 d-flex align-items-center">
                    <img src="http://i.stack.imgur.com/H9Sb2.png" title="Visualizar a senha" alt="visualizar senha" id="olho">
                </div>
            </div>
            <div class="form-group row" id="campo2">
                <label for="passwordNgo" class="col-sm-4 col-form-label">Confirme sua senha</label>
                <div class="col-sm-6">
                    <input type="password" class="form-control" name="re-password" value="password" placeholder="Confirme sua nova senha" value="{{ isset($ngo['user_id']) ? $ngo['user_id'] : '' }}">
                </div>
                <div class="col-sm-2 d-flex align-items-center">
                    <img src="http://i.stack.imgur.com/H9Sb2.png" title="Visualizar a senha" alt="visualizar senha" id="olho">
                </div>
            </div>
            <div class="form-group row">
                <label for="zipCodeNgo" class="col-sm-4 col-form-label">CEP</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="cep" name="zip_code" placeholder="CEP" value="{{ isset($ngo['zip_code']) ? $ngo['zip_code'] : '' }}">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6 p-1">
                    <label for="numberNgo">Número</label>
                    <input type="number" class="form-control" name="number" placeholder="No." value="{{ isset($ngo['number']) ? $ngo['number'] : '' }}">
                </div>
                <div class="form-group col-md-6 p-1">
                    <label for="complementNgo">Complemento</label>
                    <input type="text" class="form-control" name="complement" placeholder="Ex.: Bloco B" value="{{ isset($ngo['complement']) ? $ngo['complement'] : '' }}">
                </div>
                <div class="form-group col-md-6 p-1">
                    <label for="addressNgo">Endereço</label>
                    <input type="text" id="rua" class="form-control" name="address" placeholder="Rua/Avenida/Logradouro" value="{{ isset($ngo['address']) ? $ngo['address'] : '' }}">
                </div>
                <div class="form-group col-md-6 p-1">
                    <label for="neighborhoodNgo">Bairro</label>
                    <input type="text" id="bairro" class="form-control" name="neighborhood" placeholder="Bairro" value="{{ isset($ngo['neighborhood']) ? $ngo['neighborhood'] : '' }}">
                </div>
                <div class="form-group col-md-6 p-1">
                    <label for="cityNgo">Cidade</label>
                    <input type="text" id="cidade" class="form-control" name="city" placeholder="Cidade" value="{{ isset($ngo['city']) ? $ngo['city'] : '' }}">
                </div>
                <div class="form-group col-md-6 p-1">
                    <label for="stateNgo">Estado</label>
                    <input type="text" id="uf" class="form-control" name="state" placeholder="Estado" value="{{ isset($ngo['state']) ? $ngo['state'] : '' }}">
                </div>
                <div class="form-group col-md-6 p-1">
                    <label for="siteNgo">Site</label>
                    <input type="text" class="form-control" name="site" placeholder="Site" value="{{ isset($ngo['site']) ? $ngo['site'] : '' }}">
                </div>
                <div class="form-group col-md-6 p-1">
                    <label for="phoneNumberNgo">Telefone</label>
                    <input type="text" id="telefone" class="form-control" 
                                name="phone_number" 
                                placeholder="Telefone/Celular" 
                                value="{{ isset($ngo['phone_number']) ? $ngo['phone_number'] : '' }}">
                </div>
                <div class="form-group col-6 md-4 p-1">
                    <label>Tipo de Conta:</label>
                    <select class="form-control">
                        <option name="type_account" value="{{ isset($ngo['type_account']) ? $ngo['type_account'] : '' }}" selected disable>Seleciona uma Opção</option>
                        <option name="Conta Corrente">Conta Corrente</option>
                        <option name="Conta Poupança">Conta Poupança</option>
                    </select>
                </div>
                <div class="form-group col-md-6 p-1">
                    <label for="bankNameOng">Nome do Banco</label>
                    <input type="text" class="form-control" name="bank_name" placeholder="Nome do Banco(Número)" value="{{ isset($ngo['bank_name']) ? $ngo['bank_name'] : '' }}">
                </div>
                <div class="form-group col-md-6 p-1">
                    <label for="bankAgencyNgo">Agência</label>
                    <input type="text" class="form-control" name="bank_agency" placeholder="Agência" value="{{ isset($ngo['bank_agency']) ? $ngo['bank_agency'] : '' }}">
                </div>
                <div class="form-group col-md-6 p-1">
                    <label for="bankAccountNgo">Número Conta</label>
                    <input type="text" class="form-control" name="bank_account" placeholder="Número Conta" value="{{ isset($ngo['bank_account']) ? $ngo['bank_account'] : '' }}">
                </div>
            <div class="form-group form-row col-12">
                <label for="texto">Fale sobre a ONG</label>
                <textarea class="form-control" name="about_the_ngo" cols="30" rows="10">
                    {{ isset($ngo['about_the_ngo']) ? $ngo['about_the_ngo'] : '' }}</textarea>
            </div>
        </div>
            <div>
                <button type="submit" class="btn btn-roxo btnOng">Salvar Edição</button>
            </div>
        </form>

        <form method='POST' action='{{ url("/delete") }}'>
            @csrf
            <input type='hidden' name='id' value='{{$ngo["id"] }}'>
            <button type='submit'
                    onclick='if(!confirm("Deseja realmente excluir seu perfil?")) return false; '>
                <i class="far fa-trash-alt"></i>
            </button>
        </form>

          <!-- Mostra os erros de validação na view-->
          @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif        
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script> 
        <script src="/js/completaCep.js" type="text/javascript"></script>         
        <script src="/js/mostrarSenha.js" type="text/javascript"></script>         
        <script src="/js/mascaraTel.js" type="text/javascript"></script>         
@endsection