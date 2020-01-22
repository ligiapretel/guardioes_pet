@extends('layouts.templateBuscaRecolhida')

@section('title')
    Guardiões Pet | Busca
@endsection

@section('content')

<section class="py-2 p-md-4">

        <div class="resultados-busca">
            <h1 class="text-center">Deu match! </h1>
            <h3 class="text-center">12 animais têm o perfil que você buscou. Conheça:</h3>
            <div class="row justify-content-center mt-5">
                <div class="card mb-4 col-11 col-sm-5 col-md-4 col-lg-3 border-none">
                    <a href="/pet/perfil/"> <!--Precisa inserir o id-->
                        <img src="img/perfil_animal_01.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Bernardo</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-center">
                                <button type="button" class="btn-roxo-outline">Veja mais</button>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card mb-4 col-11 col-sm-5 col-md-4 col-lg-3 border-none">
                    <a href="paginaAnimal.php">
                        <img src="img/perfil_animal_02.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Layla</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-center">
                                <button type="button" class="btn-roxo-outline">Veja mais</button>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card mb-4 col-11 col-sm-5 col-md-4 col-lg-3 border-none">
                    <a href="paginaAnimal.php">
                        <img src="img/perfil_animal_03.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Erasmo</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-center">
                                <button type="button" class="btn-roxo-outline">Veja mais</button>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card mb-4 col-11 col-sm-5 col-md-4 col-lg-3 border-none">
                    <a href="paginaAnimal.php">
                        <img src="img/perfil_animal_01.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Julio</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-center">
                                <button type="button" class="btn-roxo-outline">Veja mais</button>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card mb-4 col-11 col-sm-5 col-md-4 col-lg-3 border-none">
                    <a href="paginaAnimal.php">
                        <img src="img/perfil_animal_01.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Boris</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-center">
                                <button type="button" class="btn-roxo-outline">Veja mais</button>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card mb-4 col-11 col-sm-5 col-md-4 col-lg-3 border-none">
                    <img src="img/perfil_animal_02.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Bela</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-center">
                            <button type="button" class="btn-roxo-outline">Veja mais</button>
                        </div>
                    </div>
                </div>
                <div class="card mb-4 col-11 col-sm-5 col-md-4 col-lg-3 border-none">
                    <a href="paginaAnimal.php">
                        <img src="img/perfil_animal_03.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Amora</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-center">
                                <button type="button" class="btn-roxo-outline">Veja mais</button>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card mb-4 col-11 col-sm-5 col-md-4 col-lg-3 border-none">
                    <a href="paginaAnimal.php">
                        <img src="img/perfil_animal_01.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Caetano</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <div id="resul-busca-btn" class="d-flex justify-content-center">
                                <button type="button" class="btn-roxo-outline">Veja mais</button>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

        </div>

        <div class="d-flex justify-content-center my-5">
            <button class="btn-roxo text-uppercase">Mostrar mais pets</button>
        </div>
    </section>

@endsection