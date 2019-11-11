<div class="row d-flex flex-row justify-content-between align-items-center" id="busca-recolhida-titulo">
        <h2>Encontre um amigo</h2>
        <button class="ico-seta-expande-busca" data-toggle="collapse"
            data-target="#collapseExample">&#8250;
        </button>
    </div>

    <div class="row collapse" id="collapseExample">
        <form action="#" method="POST" class="pt-3 col pb-2">

            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 p-3">
                    <select name="animal" class="form-control">
                        <option disabled selected>Pet</option>
                        <option value="cachorro">Cachorro</option>
                        <option value="gato">Gato</option>
                    </select>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 p-3">
                <select name="comoQueroAjudar" class="form-control">
                        <option disabled selected>Como quer ajudar?</option>
                        <option value="adocao">Adoção</option>
                        <option value="apadrinhamento">Apadrinhamento</option>
                        <option value="lartemporario">Lar temporário</option>
                    </select>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 p-3">
                    <select name="porte" class="form-control">
                        <option disabled selected>Porte</option>
                        <option value="pequeno">Pequeno</option>
                        <option value="medio">Médio</option>
                        <option value="grande">Grande</option>
                    </select>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 p-3">
                    <select name="ong" class="form-control">
                        <option disabled selected>Selecionar a ONG</option>
                        <option value="ong-a">ONG $A</option>
                        <option value="ong-b">ONG $B</option>
                        <option value="ong-c">ONG $C</option>
                    </select>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 p-3">
                    <select name="sexo" class="form-control">
                        <option disabled selected>Sexo</option>
                        <option value="femea">Fêmea</option>
                        <option value="macho">Macho</option>
                    </select>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 p-3">
                    <button class="btn-busca-recolhida" type="submit" name="procurar">Procurar</button>
                </div>
            </div>
            
        </form>
    </div>