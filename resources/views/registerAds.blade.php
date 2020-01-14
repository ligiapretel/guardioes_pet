@extends('layouts.templateMenuLateral')

@section('title')
    Guardiões Pet | Cadastro Anúncio
@endsection

@section('content')

        <form method="POST" action="anuncios.php" class="card col-lg-8 col-md-12 col-sm-6 col-xs-6 p-5 formAnuncio" id="formAnimal">
            <!-- essa div é para o título -->
            <div class="form-group d-flex justify-content p-2">
                <h3 class="tituloAnuncio">Cadastro de Anúncio</h3>
            </div>
            <!--aqui começa o formulário -->
            <!-- o nome do anunciante deve ser o mesmo do cadastro de Guardião. Linkar os dois pra aqui no anúncio já vir preenchido -->
            <div class="form-group row">
                <label for="nomeAnuncio" class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-form-label">Nome do Anunciante</label>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                    <input type="text" class="form-control" id="nomeAnuncio" placeholder="Nome do Cadastro">
                </div>
            </div>
            <p class="font-weight-bold">Preciso de:</p>
                <div class="row">
                    <div class="col-4">
                        <label for="medicamentoId" class="col-form-label">Medicamentos</label>
                    </div>
                    <div class="col-8">
                        <input type="text" class="form-control" id="medicamentoId" name="medicamento" placeholder="Ex.: Antipulgas, Vermífugo">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-4">
                        <label for="higieneId" class="col-form-label">Produtos de Higiene</label>
                    </div>
                    <div class="col-8">
                        <input type="text" class="form-control" id="higieneId" name="higiene" placeholder="Ex.: Fraldas, Tapetes Higiênicos">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-4">
                        <label for="alimentosId" class="col-form-label">Alimentos</label>
                    </div>
                    <div class="col-8">
                        <input type="text" class="form-control" id="alimentosId" name="alimentos" placeholder="Ex.: Ração comum, Ração para obesos">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-4">
                        <label for="brinquedosId" class="col-form-label">Brinquedos</label>
                    </div>
                    <div class="col-8">
                        <input type="text" class="form-control" id="brinquedosId" name="brinquedos" placeholder="Ex.: Bola, Corda">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-4">
                        <label for="acessoriosId" class="col-form-label">Acessórios</label>
                    </div>
                    <div class="col-8">
                        <input type="text" class="form-control" id="acessoriosId" name="acessorios" placeholder="Ex.: Camas, Coleiras, Guias">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-4">
                        <label for="outrosId" class="col-form-label">Outros</label>
                    </div>
                    <div class="col-8">
                        <textarea class="form-control" id="outrosId" name="outros" placeholder="Descreva" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <button type="submit" class="btn-roxo mt-2" id="botaoAnuncio">Salvar anúncio</button>

        </form>

@endsection