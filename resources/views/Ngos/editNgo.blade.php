@extends('layouts.templateMenuLateral')

@section('title')
    Guardiões Pet | Editar ONG
@endsection

@section('content')

<form action="/ong/edita" method="POST" class="card col-lg-8 p-5" id="formOng">
    {{ csrf_field() }}
    <!--gera token de segurança - verifica se o usuário é autenticado-->

    <!-- Verificando se o perfil foi atualizado com sucesso -->
    @if(session("success"))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{session("success")}}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    @endif
    <!-- Verificando se deu erro na atualização do perfil -->
    @if(session("error"))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>{{session("error")}}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    <!-- essa div é para o título -->
    <div class="row mb-4 pl-3">
        <h3 class="tituloOng">Meu perfil | Editar dados</h3>
    </div>
    <input class="form-control" type="hidden" name="id" value="{{$user->ngo->id}}" />
    <input class="form-control" type="hidden" name="userId" value="{{$user->id}}" />
    <!--puxa o id da ong-->
    <div class="form-group row">
        <label for="socialNameNgo" class="col-sm-4 col-form-label">Nome da ONG</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" name="social_name" placeholder="Nome da sua ONG"
                value="{{$user->ngo->social_name}}">
        </div>
    </div>
    <div class="form-group row">
        <label for="fantasy_name" class="col-sm-4 col-form-label">Nome fantasia da ONG</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" name="fantasy_name" placeholder="Nome fantasia da sua ONG"
                value="{{$user->ngo->fantasy_name}}">
        </div>
    </div>
    <div class="form-group row">
        <label for="cnpjNgo" class="col-sm-4 col-form-label">CNPJ</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" name="cnpj" placeholder="Número do CNPJ da ONG"
                value="{{$user->ngo->cnpj}}">
        </div>
    </div>
    <div class="form-group row">
        {{-- <img src="{{asset('storage/public/ngos_pictures/'.$user->ngo->profile_picture)}}" alt=""/> --}}
        <label for="pictureNgo" class="col-sm-4 col-form-label">Foto de Perfil</label>
        <div class="col-sm-8">
            <input type="file" class="form-control-file" name="profile_picture" value="{{$user->ngo->profile_picture}}">
        </div>
    </div>
    <div class="form-group row">
        <label for="nameNgo" class="col-sm-4 col-form-label">Nome do Responsável</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" name="responsable_name" placeholder="Responsavel da ONG"
                value="{{$user->ngo->responsable_name}}">
        </div>
    </div>
    <div class="form-group row">
        <label for="emailNgo" class="col-sm-4 col-form-label">E-mail</label>
        <div class="col-sm-8">
            <input type="email" class="form-control" name="email" placeholder="seunome@email.com"
                value="{{$user->email}}">
        </div>
    </div>
    <div class="form-group row" id="campo">
        <label for="passwordNgo" class="col-sm-4 col-form-label">Defina uma senha</label>
        <div class="col-sm-6">
            <input type="password" class="form-control pwd" name="password"
                placeholder="Nova senha minimo 6 caracteres" value="{{$user->password}}">
        </div>
    </div>
    <div class="form-group row" id="campo2">
        <label for="passwordNgo" class="col-sm-4 col-form-label">Confirme sua senha</label>
        <div class="col-sm-6">
            <input type="password" class="form-control" name="re-password"
                placeholder="Confirme sua nova senha" value="{{$user->password}}">
        </div>
    </div>
    <div class="form-group row">
        <label for="zipCodeNgo" class="col-sm-4 col-form-label">CEP</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="cep" name="zip_code" placeholder="CEP"
                value="{{$user->ngo->zip_code}}">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6 p-1">
            <label for="numberNgo">Número</label>
            <input type="number" class="form-control" name="number" placeholder="No." value="{{$user->ngo->number}}">
        </div>
        <div class="form-group col-md-6 p-1">
            <label for="complementNgo">Complemento</label>
            <input type="text" class="form-control" name="complement" placeholder="Ex.: Bloco B"
                value="{{$user->ngo->complement}}">
        </div>
        <div class="form-group col-md-6 p-1">
            <label for="addressNgo">Endereço</label>
            <input type="text" id="rua" class="form-control" name="address" placeholder="Rua/Avenida/Logradouro"
                value="{{$user->ngo->address}}">
        </div>
        <div class="form-group col-md-6 p-1">
            <label for="neighborhoodNgo">Bairro</label>
            <input type="text" id="bairro" class="form-control" name="neighborhood" placeholder="Bairro"
                value="{{$user->ngo->neighborhood}}">
        </div>
        <div class="form-group col-md-6 p-1">
            <label for="cityNgo">Cidade</label>
            <input type="text" id="cidade" class="form-control" name="city" placeholder="Cidade"
                value="{{$user->ngo->city}}">
        </div>
        <div class="form-group col-md-6 p-1">
            <label for="stateNgo">Estado</label>
            <input type="text" id="uf" class="form-control" name="state" placeholder="Estado"
                value="{{$user->ngo->state}}">
        </div>
        <div class="form-group col-md-6 p-1">
            <label for="siteNgo">Site</label>
            <input type="text" class="form-control" name="site" placeholder="Site" value="{{$user->ngo->site}}">
        </div>
        <div class="form-group col-md-6 p-1">
            <label for="phoneNumberNgo">Telefone</label>
            <input type="text" id="telefone" class="form-control" name="phone_number" placeholder="Telefone/Celular"
                value="{{$user->ngo->phone_number}}">
        </div>
        <div class="form-group col-6 md-4 p-1">
            <label>Tipo de Conta:</label>
            <select name="type_account" class="form-control">
                <option name="type_account" disable>Selecione</option>
                <option {{$user->ngo->type_account == 'Conta Corrente' ? 'selected':'' }} name="Conta Corrente"
                    value="{{$user->ngo->type_account}}">Conta Corrente</option>
                <option {{$user->ngo->type_account == 'Conta Poupança' ? 'selected':'' }} name="Conta Poupança"
                    value="{{$user->ngo->type_account}}">Conta Poupança</option>
            </select>
        </div>
        <div class="form-group col-md-6 p-1">
            <label for="bankNameOng">Nome do Banco</label>
            <input type="text" class="form-control" name="bank_name" placeholder="Nome do Banco"
                value="{{$user->ngo->bank_name}}">
        </div>
        <div class="form-group col-md-6 p-1">
            <label for="bankAgencyNgo">Agência</label>
            <input type="text" class="form-control" name="bank_agency" placeholder="Agência"
                value="{{$user->ngo->bank_agency}}">
        </div>
        <div class="form-group col-md-6 p-1">
            <label for="bankAccountNgo">Número Conta</label>
            <input type="text" class="form-control" name="bank_account" placeholder="Número Conta"
                value="{{$user->ngo->bank_account}}">
        </div>
        <div class="form-group form-row col-12">
            <label for="texto">Fale sobre a ONG</label>
            <textarea class="form-control" name="about_the_ngo" cols="30" rows="10">
            {{$user->ngo->about_the_ngo}}</textarea>
        </div>
    </div>
    <div class="d-flex justify-content-end mt-3">
        <button type="submit" class="btn-roxo">Salvar Edição</button>
    </div>
</form>

<!-- <form method='POST' action='{{ url("/delete") }}'>
            @csrf
            <input type='hidden' name='id' value=''>
            <button type='submit' onclick='if(!confirm("Deseja realmente excluir seu perfil?")) return false; '>
                <i class="far fa-trash-alt"></i>
            </button>
        </form> -->

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

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="/js/parsley.js"    type="text/javascript"></script>
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script> 
        <script src="/js/completaCep.js" type="text/javascript"></script>         
        <!-- <script src="/js/mostrarSenha.js" type="text/javascript"></script>          -->
        <script src="/js/mascaraTel.js" type="text/javascript"></script>         
@endsection