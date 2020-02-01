@extends('layouts.templateGuardioes')

@section('title')
    Guardiões Pet | Cadastro ONG
@endsection

@section('content') 
        
        <form action="{{ ('cadastro') }}" method="POST" class="card col-lg-8 col-md-12 col-sm-12 col-12 p-5" id="formOng" enctype='multipart/form-data' data-parsley-validate="">
        {{ csrf_field() }} <!--gera token de segurança - verifica se o usuário é autenticado-->
            <!-- essa div é para o título -->

        <!-- Código somente para testes de erro no preenchimento do form. Quando estiver ok, melhorar essa exibição para o usuário -->
        @if(!empty($errors->all()))
            <script>alert('existem erros.' @foreach($errors->all() as $message) +"\n {{ $message }}" @endforeach)</script>
        @endif

            <div class="form-group d-flex justify-content p-2">
                <h3 class="tituloOng">Cadastro de ONG</h3>
            </div>
            <!--aqui começa o formulário -->
            <input  class="form-control" type="hidden"name="id" value="{{ isset($ngo['id']) ? $ngo['id'] : '' }}"/> <!--puxa o id da ong-->
            <div class="form-group row">
                <label for="socialNameNgo" class="col-sm-4 col-form-label">Nome da ONG*</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="social_name" placeholder="Nome da sua ONG" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="fantasy_name" class="col-sm-4 col-form-label">Nome Fantasia da ONG*</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="fantasy_name" placeholder="Nome fantasia da sua ONG" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="cnpjNgo" class="col-sm-4 col-form-label">CNPJ*</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="cnpj" placeholder="Número do CNPJ da ONG" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="pictureNgo" class="col-sm-4 col-form-label">Foto de Perfil</label>
                <div class="col-sm-8">
                    <input type="file" class="form-control-file" name="profile_picture">
                </div>
            </div>
            <div class="form-group row">
                <label for="nameNgo" class="col-sm-4 col-form-label">Nome do Responsável*</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="responsable_name" placeholder="Responsavel da ONG" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-4 col-form-label">E-mail*</label>
                <div class="col-sm-8">
                    <input type="email" class="form-control" name="email" placeholder="seunome@email.com" data-parsley-trigger="change" required="">
                </div>
            </div>
            <div class="form-group row">
                <label for="passwordNgo" class="col-sm-4 col-form-label">Defina uma senha*</label>
                <div class="col-sm-8">
                    <input type="password" class="form-control" name="password" placeholder="Nova senha minimo 6 caracteres" required >
                </div>
            </div>
            <div class="form-group row">
                <label for="passwordNgo" class="col-sm-4 col-form-label">Confirme sua senha*</label>
                <div class="col-sm-8">
                    <input type="password" class="form-control" name="re-password" placeholder="Confirme sua nova senha" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="zipCodeNgo" class="col-sm-4 col-form-label">CEP*</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="cep" name="zip_code" placeholder="CEP" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6 p-1">
                    <label for="numberNgo">Número</label>
                    <input type="number" class="form-control" name="number" placeholder="No.">
                </div>
                <div class="form-group col-md-6 p-1">
                    <label for="complementNgo">Complemento</label>
                    <input type="text" class="form-control" name="complement" placeholder="Ex.: Bloco B">
                </div>
                <div class="form-group col-md-6 p-1">
                    <label for="addressNgo">Endereço*</label>
                    <input type="text" id="rua" class="form-control" name="address" placeholder="Rua/Avenida/Logradouro">
                </div>
                <div class="form-group col-md-6 p-1">
                    <label for="neighborhoodNgo">Bairro*</label>
                    <input type="text" id="bairro" class="form-control" name="neighborhood" placeholder="Bairro">
                </div>
                <div class="form-group col-md-6 p-1">
                    <label for="cityNgo">Cidade*</label>
                    <input type="text" id="cidade" class="form-control" name="city" placeholder="Cidade">
                </div>
                <div class="form-group col-md-6 p-1">
                    <label for="stateNgo">Estado*</label>
                    <input type="text" id="uf" class="form-control" name="state" placeholder="Estado">
                </div>
                <div class="form-group col-md-6 p-1">
                    <label for="siteNgo">Site</label>
                    <input type="text" class="form-control" name="site" placeholder="Site">
                </div>
                <div class="form-group col-md-6 p-1">
                    <label for="phoneNumberNgo">Telefone*</label>
                    <input type="text" id="telefone" class="form-control" name="phone_number" placeholder="Telefone/Celular" required>
                </div>
                <div class="form-group col-6 md-4 p-1">
                    <label>Tipo de Conta:</label>
                    <select name="type_account" class="form-control">
                        <option selected disable>Seleciona uma Opção</option>
                        <option value="Conta Corrente">Conta Corrente</option>
                        <option value="Conta Poupança">Conta Poupança</option>
                    </select>
                </div>
                <div class="form-group col-md-6 p-1">
                    <label for="bankNameOng">Nome do Banco</label>
                    <input type="text" class="form-control" name="bank_name" placeholder="Nome do Banco(Número)">
                </div>
                    <div class="form-group col-md-6 p-1">
                    <label for="bankAgencyNgo">Agência</label>
                    <input type="text" class="form-control" name="bank_agency" placeholder="Agência">
                </div>
                <div class="form-group col-md-6 p-1">
                    <label for="bankAccountNgo">Número Conta</label>
                    <input type="text" class="form-control" name="bank_account" placeholder="Número Conta">
                </div>
            <div class="form-group form-row col-12">
                <label for="texto">Fale sobre a ONG</label>
                <textarea class="form-control" name="about_the_ngo" cols="30" rows="10"
                    placeholder="Descreva o trabalho desenvolvido pela ONG"></textarea>
            </div>
        </div>
            <div>
                <button type="submit" class="btn btn-roxo btnOng">Salvar Cadastro</button>
            </div>
        </form>

        
        <div class="bs-callout bs-callout-warning hidden">
            <h4>Opa!</h4>
            <p>Este campo está incorreto </p>
          </div>
          
          <div class="bs-callout bs-callout-info hidden">
            <h4>Eba!</h4>
            <p>Esta tudo certo!</p>
          </div>
          
          <form id="demo-form" data-parsley-validate="">
            <label for="fullname">Full Name * :</label>
            <input type="text" class="form-control" name="fullname" required="">
          
            <label for="email">Email * :</label>
            <input type="email" class="form-control" name="email" data-parsley-trigger="change" required="">
          
            <label for="contactMethod">Preferred Contact Method *:</label>
            <p>
              Email: <input type="radio" name="contactMethod" id="contactMethodEmail" value="Email" required="">
              Phone: <input type="radio" name="contactMethod" id="contactMethodPhone" value="Phone">
            </p>
          
            <label for="hobbies">Hobbies (Optional, but 2 minimum):</label>
            <p>
              Skiing <input type="checkbox" name="hobbies[]" id="hobby1" value="ski" data-parsley-mincheck="2"><br>
              Running <input type="checkbox" name="hobbies[]" id="hobby2" value="run"><br>
              Eating <input type="checkbox" name="hobbies[]" id="hobby3" value="eat"><br>
              Sleeping <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep"><br>
              Reading <input type="checkbox" name="hobbies[]" id="hobby5" value="read"><br>
              Coding <input type="checkbox" name="hobbies[]" id="hobby6" value="code"><br>
            </p>
          
            <p>
            <label for="heard">Heard about us via *:</label>
            <select id="heard" required="">
              <option value="">Choose..</option>
              <option value="press">Press</option>
              <option value="net">Internet</option>
              <option value="mouth">Word of mouth</option>
              <option value="other">Other..</option>
            </select>
            </p>
          
            <p>
            <label for="message">Message (20 chars min, 100 max) :</label>
            <textarea id="message" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 character comment.." data-parsley-validation-threshold="10"></textarea>
            </p>
          
            <br>
            <input type="submit" class="btn btn-default" value="validate">
          
            <p><small>* Please, note that this demo form is not a perfect example of UX-awareness. The aim here is to show a quick overview of parsley-API and Parsley customizable behavior.</small></p>
          </form>
          
          <script type="text/javascript">
          $(function () {
            $('#demo-form').parsley().on('field:validated', function() {
              var ok = $('.parsley-error').length === 0;
              $('.bs-callout-info').toggleClass('hidden', !ok);
              $('.bs-callout-warning').toggleClass('hidden', ok);
            })
            .on('form:submit', function() {
              return false; // Don't submit form for this demo
            });
          });
          </script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

 








     
        <script src="/js/completaCep.js" type="text/javascript"></script>
        <script src="/js/parsley.js"    type="text/javascript"></script>
        <script src="/js/mascaraTel.js" type="text/javascript"></script>
@endsection