@extends('layouts.templateMenuLateral')

@section('title')
    Guardiões Pet | Meus Anúncios
@endsection

@section('content')

    <!-- Se existir anúncio sendo passado pelo parâmetro, ele abre o formulário com os dados do anúncio a ser atualizado -->
    @if(isset($ad))
            <h3 class="tituloAnuncio pb-3">Meus anúncios</h3>
            <p>Aqui serão exibidos os anúncios cadastrados daquele usuário</p>
            <section>
            <div class="row p-3 d-flex justify-content-center align-items-center">
                <div class="col-6 col-md-4 col-lg-3 shadow p-3">
                    <div class="card" style="border-color:  #FF9640;">
                        <div class="card-body">
                            <h5 class="card-title text-center col-12">User name</h5>
                            <p class="card-text text-center">Medicine</p>
                            <a href="#"><button>Editar</button></a>
                            <a href="#"><button>Excluir</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @else
        <div class="col-6 col-md-12 col-lg-8 p-5 mt-5">
            <h3 class="pt-5 mt-5 text-center">Você não possui anúncios cadastrados.</h3>
        </div>
        @endif

@endsection