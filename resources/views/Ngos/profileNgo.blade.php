@extends('layouts.templateBuscaRecolhida')

@section('title')
    Guardiões Pet | Perfil da ONG
@endsection

@section('content')

 <!--Onde esta localizado as informacoes da ONG e img-->
 <section class="container-fluid" id="pfong_cx_info_principal">
 
    <div class="row">
        <div id="pfOng_cx_info_principal_ordem" class="col-lg-6 col-md-6 col-sm-12 col-12">
            <h1 class="pfOngGuard_titulo text-dark font-weight-bolder">{{ $ngo->social_name }}</h1>
            <p class="text-dark text-justify">Nossa ONG nasceu com intenções claras de resgate, castração e doação de animais. Nos empenhamos em abrigar poucos, socorrer vários e castrar MUITOS, pois a castração é a única solução ao problema estrutural da procriação de animais abandonados.</p>
            <p class="text-dark text-justify">Nossa ONG é formada por profissionais liberais, gente comum que trabalha, estuda, enfim, vive!</p>
            <div id="pfG_cx_i_txt" class="d-flex align-items-center">
                <i class="mdi mdi-email-outline"></i>
                <!--<img src='{{ $ngo->profile_picture }}'>-->
                <p> Envie uma mensagem!</p>
                <i class="mdi mdi-alert-outline"></i>
                <p> Denunciar Perfil</p>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12 col-12 d-flex justify-content-center">
            <img id="perfilOng_imagem" src="/img/perfil_ong_imagem.png">
        </div>
    </div>
</section>
    
<!--Onde esta localizado os Animais com a ONG-->
<section class="container-fluid" id="perfilOngGuar_animais"> 
    <div class="row">
        <h2 class="col-lg-12 text-dark font-weight-bold pfOngGuard_titulo">Animais com a ONG (98)</h2>

        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="card">
                <img src="/img/pfGuardiao_cachorro1.jpg" class="card-img-top img-fluid" height="300" width="300"> 
                <div class="card-body" style="background-color: #E7E2FC">
                <h4 class="card-title text-dark font-weight-bold">Elza</h4>
                    <p class="card-text text-secondary">Tenho uma pelagem de tres cores que é puro charme e pra completar uma carinha inocente que é i-rre-sis-tível!Adoro tomar um solzinho na janela e tirar cochilos na ...</p>
                    <a href="#" class="btn btn-roxo-outline">Saiba mais</a> 
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="card">
                <img src="/img/pfGuardiao_gato1.jpeg" class="card-img-top img-fluid" height="300" width="300">
                <div class="card-body" style="background-color: #E7E2FC">
                <h4 class="card-title text-dark font-weight-bold">Chico</h4>
                    <p class="card-text text-secondary">Tenho uma pelagem de tres cores que é puro charme e pra completar uma carinha inocente que é i-rre-sis-tível!Adoro tomar um solzinho na janela e tirar cochilos na ...</p>
                    <a href="#" class="btn btn-roxo-outline">Saiba mais</a>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="card">
                <img src="/img/pfGuardiao_cachorro2.jpg" class="card-img-top img-fluid" height="300" width="300">
                <div class="card-body" style="background-color: #E7E2FC">
                    <h4 class="card-title text-dark font-weight-bold">Belquior</h4>
                    <p class="card-text text-secondary">Tenho uma pelagem de tres cores que é puro charme e pra completar uma carinha inocente que é i-rre-sis-tível!Adoro tomar um solzinho na janela e tirar cochilos na ...</p>
                    <a href="#" class="btn btn-roxo-outline">Saiba mais</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Onde a ONG coloco os itens que estao necessitando-->
<section class="container-fluid bg-light" id="pfong_precisa_cx_principal"> 
    <div class="row">
        <h2 class="text-dark font-weight-bold pfOngGuard_titulo">Estamos Precisando!</h2>
        <div class="col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-around flex-wrap">
            <div class="pfong_precisando">Item 1</div>
            <div class="pfong_precisando">Item 2</div>
            <div class="pfong_precisando">Item 3</div>
            <div class="pfong_precisando">Item 4</div>
            <div class="pfong_precisando">Item 5</div> 
            <div class="pfong_precisando">Item 6</div> 
            <div class="pfong_precisando">Item 7</div> 
        </div>
    </div>

</section>
<script type='text/javascript' src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
@endsection