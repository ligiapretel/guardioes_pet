@extends('layouts.templateMenuLateral')

@section('title')
    Guardiões Pet | Cadastro Anúncio
@endsection

@section('content')

    <!-- Se existir anúncio sendo passado pelo parâmetro, ele abre o formulário com os dados do anúncio a ser atualizado -->
    @if(isset($ad))
        <form method="POST" action="/anuncios" class="card col-6 col-md-12 col-lg-8 p-5 formAnuncio" id="formAnimal">
        <!-- Token de segurança do Laravel para forms. Deve ser colocado em todos os forms. -->
        @csrf
            <h3 class="tituloAnuncio pb-3">Edição de Anúncio</h3>
            <!-- Input hidden que envia o id do anúncio -->
            <input type="text" name="idAd" value="{{$ad->id}}" hidden>
            <p class="font-weight-bold">Preciso de:</p>
                <div class="row">
                    <div class="col-3">
                        <label for="medicamentoId" class="col-form-label">Medicamentos</label>
                    </div>
                    <div class="col-9">
                        <input type="text" class="form-control" id="medicamentoId" name="medicamento" value="{{$ad->medicine}}">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-3">
                        <label for="higieneId" class="col-form-label">Produtos de Higiene</label>
                    </div>
                    <div class="col-9">
                        <input type="text" class="form-control" id="higieneId" name="higiene" value="{{$ad->hygiene_supply}}">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-3">
                        <label for="alimentosId" class="col-form-label">Alimentos</label>
                    </div>
                    <div class="col-9">
                        <input type="text" class="form-control" id="alimentosId" name="alimentos" value="{{$ad->food}}">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-3">
                        <label for="brinquedosId" class="col-form-label">Brinquedos</label>
                    </div>
                    <div class="col-9">
                        <input type="text" class="form-control" id="brinquedosId" name="brinquedos" value="{{$ad->toys}}">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-3">
                        <label for="acessoriosId" class="col-form-label">Acessórios</label>
                    </div>
                    <div class="col-9">
                        <input type="text" class="form-control" id="acessoriosId" name="acessorios" value="{{$ad->accessories}}">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-3">
                        <label for="outrosId" class="col-form-label">Outros</label>
                    </div>
                    <div class="col-9">
                        <textarea class="form-control" id="outrosId" name="outros" cols="30" rows="10">{{$ad->others}}</textarea>
                    </div>
                </div>
                <div class="d-flex justify-content-end mt-3">
                    <button type="submit" class="btn-roxo" id="botaoAnuncio">Salvar alteração</button>
                </div>

        </form>
        @else
        <div class="col-6 col-md-12 col-lg-8 p-5 mt-5">
            <h3 class="pt-5 mt-5 text-center">Você não selecionou nenhum anúncio.</h3>
        </div>
        @endif

@endsection