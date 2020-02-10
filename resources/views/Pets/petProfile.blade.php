@extends ('layouts.templateGuardioes')

@section ('title')
    Guardiões Pet | Perfil do animal
@endsection

@section('content')
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v6.0"></script>

    <section id="perfil-animal">
        <!--H1 que ficara ativado somente no mobile -->
        <!-- <h1 class="text-center">Bernardo</h1> -->

        <!-- Verificando se o pet foi adotado/apadrinhado/lar temp com sucesso -->
        @if(session("success"))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{session("success")}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
          
        @endif
        <!-- Verificação de erro no pet foi adotado/apadrinhado/lar temp-->
        @if(session("error"))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>{{session("error")}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif



        @if(isset($pet))

        <div class="container">
            <div id="perfil-anim-cx-info" class="row justify-content-center">
                <div id="dados-animal" class="col-11 col-sm-6 col-md-6 col-lg-6 col-xl-5">
                    <h1>{{$pet->name}}</h1>
                    <p><b>Idade</b>: {{$pet->age}} anos</p>
                    <p><b>Sexo</b>: 
                    @if($pet->sex == "M")
                        macho
                    @else 
                        fêmea
                    @endif
                    </p>
                    <p><b>Porte</b>:                   
                    @if ($pet->animal_bearing == "pequeno")
                        pequeno
                    @elseif ($pet->animal_bearing == "medio")
                        médio
                    @else
                        grande
                    @endif</p>

                    <p><b>Pelagem</b>: {{$pet->coal_type}} </p>
                    <p><b>Raça</b>: {{$pet->breed}} </p>

                    <p><b>Castrado</b>: 
                    @if($pet->castration == "1")
                    Sim</p>
                    @else
                    Não</p>
                    @endif            

                    <p><b>Vacinado</b>: 
                    @if($pet->vaccinated == "1")
                    Sim</p>
                    @else
                    Não</p>
                    @endif                    
                    </p>

                    <p><b>Vermifugado</b>: 
                    @if($pet->deworming == "1")
                    Sim</p>
                    @else
                    Não</p>
                    @endif                    
                    </p>

                    <p><b>Dócil</b>: 
                    @if($pet->docile == "1")
                    Sim</p>
                    @else
                    Não</p>
                    @endif                    
                    </p>

                    <p><b>Gosta de carinho</b>: 
                    @if($pet->like_affection == "1")
                    Sim</p>
                    @else
                    Não</p>
                    @endif                    
                    </p>

                    <p><b>Gosta de crianças</b>: 
                    @if($pet->like_children == "1")
                    Sim</p>
                    @else
                    Não</p>
                    @endif                    
                    </p>

                    <p><b>Convive bem com outros animais</b>: 
                    @if($pet->live_well_with_animals == "1")
                    Sim</p>
                    @else
                    Não</p>
                    @endif                    
                    </p>

                    <p><b>Gosta de brincar</b>: 
                    @if($pet->like_to_play == "1")
                    Sim</p>
                    @else
                    Não</p>
                    @endif                    
                    </p>

                    <p><b>Faz as necessidades no lugar certo</b>: 
                    @if($pet->well_behaved == "1")
                    Sim</p>
                    @else
                    Não</p>
                    @endif                    
                    </p>
 
                    <br>

                    <div class="row" id="perfil-anim-icon-msgm-respos">
                        <div>
                            <a href="#"><img class="mb-2" id="perfil_anim_icon-msgm" src="/img/icon_mail.png"></a>
                        </div>
                        <div id="perfil-anim-msgm-respons" class="col-9 col-sm-10 col-md-9 col-lg-10 col-xl-10">
                            <p>Quer perguntar algo sobre mim?<br>Envie uma mensagem!</p>
                        </div>
                    </div>

                </div>
                <div id="perfil-anim-cx-img" class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <div class="container">
                        <div class="row">
                            <div id="perfil-animal-carrossel" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#perfil-animal-carrossel" data-slide-to="0"
                                        class="active rounded-circle"></li>
                                    <li data-target="#perfil-animal-carrossel" data-slide-to="1" class="rounded-circle">
                                    </li>
                                    <li data-target="#perfil-animal-carrossel" data-slide-to="2" class="rounded-circle">
                                    </li>
                                </ol>


                                <div class="carousel-inner">


                                @foreach ($pet_pictures as $picture)
                                                                                                                
                                    <div class="carousel-item active">
                                        <img class="d-block w-100 rounded" src="{{asset('storage/public/pets_pictures/'.$picture->picture)}}">
                                    </div>
                                    
                                @endforeach

                                    <!-- <div class="carousel-item active">
                                        <img class="d-block w-100 rounded" src="/img/perfil_animal_01.jpg"
                                            alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100 rounded" src="/img/perfil_animal_02.jpg"
                                            alt="Photo by Holly Bartley on Unsplash">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100 rounded" src="/img/perfil_animal_03.jpg"
                                            alt="Photo by Bogdan Todoran on Unsplash">
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-between mt-1"  id="acoes-pet">
                            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 pl-0">
                                <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false" data-text="Este pet está precisando de um guardião! Que tal conhecê-lo melhor?">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>  
                            </div>

                            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 pr-0 text-right">
                                <!-- <p class="d-inline"><a href="#">Favoritar</a></p>
                                <img class="perfil-anim-icon-respos col-1 pr-0 pl-0 ml-1" src="/img/like_no.png"> -->
                                <span class="tw-heart-box">
                                <input type="checkbox" name="name" value="" id="curtir">
                                <span class="tw-heart"></span>
                                </span>

                            </div>
                        </div>
                        <div class="row justify-content-between mt-4" >
                            <div class="cx-btn-respons">
                                <form action="/pet/perfil/adotar/{{$pet->id}}" method="POST">
                                @csrf
                                <input name="user" type="hidden" value="{{Auth::user()->id}}">
                                <button class="btn-roxo text-uppercase w-100" name="adotar">Adotar</button></form>
                            </div>
                            <div class="cx-btn-respons">
                                <form action="/pet/perfil/lar/{{$pet->id}}" method="POST">
                                    @csrf
                                    <input name="user" type="hidden" value="{{Auth::user()->id}}">
                                <button class="btn-roxo text-uppercase w-100"              name="lar"> Lar temporário</button></form>
                            </div>
                            <div class="cx-btn-respons">
                                <form action="/pet/perfil/apadrinhar/{{$pet->id}}" method="POST">
                                    @csrf
                                    <input name="user" type="hidden"  value="{{Auth::user()->id}}">
                                <button class="btn-roxo text-uppercase w-100" name="apadrinhar">Apadrinhar</button></form>
                            </div>
                        </div>

                        <div class="row justify-content-between mt-4">
                        <p><i>Este pet está sendo cuidado com muito carinho por: <u><a href="/ong/perfil/{{$ngo->id}}" class="">{{$ngo->social_name}}</a></u></i></p>
                        </div>

                </div>
            </div>
        </div>

    </section>

    <section class="perfil-animal-sobre">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-11 pt-5 pb-5 text-justify">
                    <h2 class="mb-5">Sobre mim</h2>
                    <p>{{$pet->description}}</p>
                    </p>
                </div>
            </div>
        </div>
    </section>


    <section class="pt-5 pb-5" id="apadrinhar">
        <div class="container d-flex-justify-content-center">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-11 text-justify">
                    <h2 class="mb-5">Fazer uma doação</h2>
                    <p>Não pode me adotar nem me abrigar, mas quer me ajudar? Meus tios e tias estão sempre precisando
                        de ração e outras coisinhas, que tal? Lá na página de anúncios da instituição que cuida de mim
                        você pode ver do que eles estão precisando.</p>
                    <p>Ah, e você também pode entrar em contato com eles se quiser doar alguma quantia em dinheiro</p>
                </div>
            </div>
            <div class="row justify-content-between m-0 pt-5 col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="col-4 col-sm-4 col-md-3 col-lg-3 col-xl-3 ">
                    <a href="/anuncios">
                        <figure class="figure">
                            <img src="/img/perfil_doar_01.jpg" class="figure-img img-fluid rounded rounded-circle"
                                alt="Photo by Autri Taheri on Unsplash">
                            <figcaption class="figure-caption text-center">Shampoo</figcaption>
                        </figure>
                    </a>
                </div>
                <div class="col-4 col-sm-4 col-md-3 col-lg-3 col-xl-3 ">
                    <a href="/anuncios">
                        <figure class="figure">
                            <img src="/img/perfil_doar_02.jpg" class="figure-img img-fluid rounded rounded-circle"
                                alt="Photo by Matthew Henry on Unsplash">
                            <figcaption class="figure-caption text-center">Antipulgas</figcaption>
                        </figure>
                    </a>
                </div>
                <div class="col-4 col-sm-4 col-md-3 col-lg-3 col-xl-3 ">
                    <a href="/anuncios">
                        <figure class="figure">
                            <img src="/img/perfil_doar_03.jpg" class="figure-img img-fluid rounded rounded-circle"
                                alt="Photo by Camylla Battani on Unsplash">
                            <figcaption class="figure-caption text-center">Ração</figcaption>
                        </figure>
                    </a>
                </div>
            </div>
        </div>
    </section>

    @else
        <h3>Você tentou acessar uma página que não existe :(</h3>
    @endif


@endsection

