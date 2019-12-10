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
            <p>Preciso de:</p>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="medicamento" id="medicamento"
                        value="medicamento">
                    <label class="form-check-label" for="medicamento">Medicamentos</label>
                </div>
                <div class="row">
                    <label for="especifique" class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-form-label">Especifique</label>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                        <input type="text" class="form-control" id="especifique"
                            placeholder="Ex.: Antipulgas, Vermífugo">
                    </div>
                    <label for="quantidade" class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-form-label">Quantidade</label>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                        <input type="number" class="form-control mt-1" id="quantidade" placeholder="Ex.: 2">
                    </div>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="higiene" id="higiene" value="higiene">
                    <label class="form-check-label" for="higiene">Produtos de Higiene</label>
                </div>
                <div class="row">
                    <label for="especifique" class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-form-label">Especifique</label>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                        <input type="text" class="form-control" id="especifique"
                            placeholder="Ex.: Fraldas, Tapetes Higiênicos">
                    </div>
                    <label for="quantidade" class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-form-label">Quantidade</label>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                        <input type="number" class="form-control mt-1" id="quantidade" placeholder="Ex.: 2">
                    </div>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="alimentos" id="alimentos" value="alimentos">
                    <label class="form-check-label" for="alimentos">Alimentos</label>
                </div>
                <div class="row">
                    <label for="especifique" class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-form-label">Especifique</label>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                        <input type="text" class="form-control" id="especifique"
                            placeholder="Ex.: Ração comum, Ração para obesos">
                    </div>
                    <label for="quantidade" class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-form-label">Quantidade</label>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                        <input type="number" class="form-control mt-1" id="quantidade" placeholder="Ex.: 2">
                    </div>
                </div>

                <div class="row mt-1">
                    <input class="form-check-input" type="checkbox" name="brinquedo" id="brinquedo" value="brinquedo">
                    <label for="brinquedo" class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-form-label">Brinquedos</label>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                        <input type="text" class="form-control mt-1" id="brinquedos" placeholder="Ex.: Bola, Corda">
                    </div>
                </div>

                <div class="row mt-1">
                    <input class="form-check-input" type="checkbox" name="acessorio" id="acessorio" value="acessorio">
                    <label for="acessório" class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-form-label">Acessórios</label>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                        <input type="text" class="form-control mt-1" id="acessórios"
                            placeholder="Ex.: Camas, Coleiras, Guias">
                    </div>
                </div>

                <div class="row mt-2">
                    <input class="form-check-input" type="checkbox" name="outros" id="outros" value="outros">
                    <label for="outros" class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-form-label">Outros</label>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                        <textarea class="form-control" id="outros" cols="30" rows="10"
                            placeholder="Descreva"></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-roxo btnGuardiao mt-2" id="botaoAnuncio">Salvar anúncio</button>
            </div>

        </form>

@endsection