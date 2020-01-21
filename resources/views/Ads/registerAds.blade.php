@extends('layouts.templateMenuLateral')

@section('title')
    Guardiões Pet | Cadastro Anúncio
@endsection

@section('content')

        <form method="POST" action="/anuncios" class="card col-lg-8 col-md-12 col-sm-6 col-xs-6 p-5 formAnuncio" id="formAnimal">
        <!-- Token de segurança do Laravel para forms. Deve ser colocado em todos os forms. -->
        @csrf
                <h3 class="tituloAnuncio pb-3">Cadastro de Anúncio</h3>
                <div class="row">
                    <div class="col-3">
                        <label for="medicamentoId" class="col-form-label">Medicamentos</label>
                    </div>
                    <div class="col-9">
                        <input type="text" class="form-control" id="medicamentoId" name="medicamento" placeholder="Ex.: Antipulgas, Vermífugo">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-3">
                        <label for="higieneId" class="col-form-label">Produtos de Higiene</label>
                    </div>
                    <div class="col-9">
                        <input type="text" class="form-control" id="higieneId" name="higiene" placeholder="Ex.: Fraldas, Tapetes Higiênicos">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-3">
                        <label for="alimentosId" class="col-form-label">Alimentos</label>
                    </div>
                    <div class="col-9">
                        <input type="text" class="form-control" id="alimentosId" name="alimentos" placeholder="Ex.: Ração comum, Ração para obesos">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-3">
                        <label for="brinquedosId" class="col-form-label">Brinquedos</label>
                    </div>
                    <div class="col-9">
                        <input type="text" class="form-control" id="brinquedosId" name="brinquedos" placeholder="Ex.: Bola, Corda">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-3">
                        <label for="acessoriosId" class="col-form-label">Acessórios</label>
                    </div>
                    <div class="col-9">
                        <input type="text" class="form-control" id="acessoriosId" name="acessorios" placeholder="Ex.: Camas, Coleiras, Guias">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-3">
                        <label for="outrosId" class="col-form-label">Outros</label>
                    </div>
                    <div class="col-9">
                        <textarea class="form-control" id="outrosId" name="outros" placeholder="Descreva" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <div class="d-flex justify-content-end mt-3">
                    <button type="submit" class="btn-roxo" id="botaoAnuncio">Salvar anúncio</button>
                </div>

        </form>

@endsection