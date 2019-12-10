@extends('layouts.templateGuardioes')

@section('title')
    Guardiões Pet | Cadastre-se
@endsection

@section('content')

<main id="main-cadastre-se" >
        <div id="container-box-cadastre-se" class="col-lg-4 col-md-5 col-sm-5 col-xs-4">
            <div class="row justify-content-center bg-cadastre-se-ong">
                <img src="img/ico-cadastre-se-ong.png" alt="Cadastro da ONG" />
            </div>
            <div class="row justify-content-center">
                <div class="col-10 text-center">
                    <h1>ONG</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-10">
                    <p>Se você faz parte de alguma ONG e deseja publicar pets disponíveis para adoção, lar temporário, apadrinhamento ou solicitar itens para doação, realize agora mesmo seu cadastro e amplie as chances de seus animais encontrarem uma família.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="botaoCadOng col-10 text-center">
                <a href="cadastroOng"><button class="btn-roxo btn-busca-expandida" type="submit" name="cadastre-se-ong">Cadastro ONG</button></a>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-10 text-center">
                    <a href="login"><p class="tem-cadastro">Já tem um cadastro?</p></a>
                </div>
            </div>
        </div>
        <div id="container-box-cadastre-se" class="col-lg-4 col-md-5 col-sm-5 col-xs-4">
            <div class="row justify-content-center bg-cadastre-se-guardiao">
                <img src="img/ico-cadastre-se-guardiao.png" alt="Cadastro do Guardião" />
            </div>
            <div class="row justify-content-center">
                <div class="col-10 text-center">
                    <h1>Guardião</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-10">
                    <p>Se você quer reduzir o número de cães e gatos abandonados, seja através de uma adoção,lar temp orário, apadrinhando ou doando itens para quem precisa, você é um Guardião. Faça seu cadastro e ajude a transformar a vida de muitos pets.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-10 text-center">
                <a href="cadastroGuardiao"><button class="botaoCadGuardiao btn-busca-expandida cor-laranja" type="submit" name="cadastre-se-guardiao">Cadastro Guardião</button></a>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-10 text-center">
                    <a href="login"><p class="tem-cadastro">Já tem um cadastro?</p></a>
                </div>
            </div>
        </div>
    </main>

@endsection
