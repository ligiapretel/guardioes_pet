@extends('layouts.templateGuardioes')

@section('title')
    GP | Ong
@endsection

@section('content')
<div class="margem">
    <div class="container">
        <div class="row justify-content-center mt-10">
            <div class="col-lg-6 m-5">

                @if(isset($user)) 
                <h3 class="mt-10">Atualização de dados {{ $ngo->social_name }}</h3>
                <form action="/admin/ong/atualizar" method="POST" class="card p-4">
                @csrf      
                    <!-- input hidden com o id do admin em Users -->
                    <input type="text" name="idNgo" hidden value="{{ $user->id }}"> 

                    <div class="form-group">
                        <label for="social_name">Razão Social</label>
                        <input name="social_name" type="text" class="form-control" id="social_name" value="{{ $ngo->social_name }}"> 
                    </div>

                    <div class="form-group">
                        <label for="cnpj">CNPJ</label>
                        <input name="cnpj" type="number" class="form-control" id="cnpj" value="{{ $ngo->cnpj }}"> 
                    </div>

                    <div class="form-group">
                        <label for="statusNgo">Status</label>
                        <select class="form-control" name="statusNgo">
                        <option selected>{{ $user->status_id }}</option>
                        <option value="1">1 - Ativo</option>
                        <option value="2">2 - Inativo</option>
                        </select>
                    </div>

                    <div class="col-lg p-0">
                       <button type="submit" class="btn btn-roxo">Atualizar</button> 
                    </div>
                    
                </form>
                @elseif(isset($result))

                @else
                    <h3>O usuário não existe ou id incorreto.</h3>
                @endif

                <div class="row">
                    <div class="col-md-12">
                        @if(isset($result)) 
                            @if($result) 
                                <h3>Atualização realizada com sucesso!</h3>
                                <a class="btn btn-primary" href="/admin/ong">Voltar</a>
                            @else
                                <h3>Não deu certo!</h3>
                                <a href="/ong/atualizar/{id?}"></a>
                            @endif
                        @endif

                    </div>
                </div>



            </div>    
        </div> 
    </div>
</div>
@endsection