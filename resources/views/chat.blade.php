@extends('layouts.templateMenuLateral')

@section('title')
    Guardiões Pet | Chat
@endsection

@section('content')
    <section class="col d-flex" >
        <!-- Início do chat-->
        <section class="col-lg-4 col-md-3 col-sm-6 col-xs-6 m-5">
            <div class="card-body">
                <div class="mensagem-guardiao mt-5">
                    <img id="perfil-chat-guardiao" src="img/johndoe.png" alt="foto perfil guardião" />
                    <h6>John Doe</h6>
                    <p>Assunto: Lar Temporário</p>
                </div>
                <div class="mensagem-guardiao">
                    <img id="perfil-chat-guardiao" src="img/jane-doe.png" alt="foto perfil guardião" />
                    <h6>Jane Doe</h6>
                    <p>Assunto: Lar Temporário</p>
                </div>
                <div class="mensagem-guardiao">
                    <img id="perfil-chat-guardiao" src="img/fulano-doe.png" alt="foto perfil guardião" />
                    <h6>Fulano Doe</h6>
                    <p>Assunto: Lar Temporário</p>
                </div>
                <div class="mensagem-guardiao">
                    <img id="perfil-chat-guardiao" src="img/user.png" alt="foto perfil guardião" />
                    <h6>Mario Doe</h6>
                    <p>Assunto: Lar Temporário</p>
                </div>
                <div class="mensagem-guardiao">
                    <img id="perfil-chat-guardiao" src="img/maria-doe.png" alt="foto perfil guardião" />
                    <h6>Maria Doe</h6>
                    <p>Assunto: Lar Temporário</p>
                </div>
                <div>
                    <a class="nav-link menu-ong" href="#">Mais mensagens ↓</a>
                </div>
            </div>
        </section>
        <div id="box-chat" class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="d-flex justify-content-start align-items-center">
                <img id="perfil-chat-guardiao" src="img/johndoe.png" alt="foto perfil guardião" />
                <div class="d-flex flex-column">
                    <h6>John Doe</h6>
                    <p>Assunto: Lar Temporário</p>
                </div>
            </div>
            <hr>
            <p>15/10/2019</p>
            <h5>Mensagem:</h5>
            <p>Olá, tenho interesse em oferecer lar temporário ao <a href="#">Boris</a>.</p>
            <hr>
            <label>Responder:</label>
            <form>
                <textarea class="form-control" type="text" rows="10"
                    placeholder="Responder a mensagem do Guardião aqui." name=""></textarea>
                <button type="submit" class="btn btn-roxo-outline d-flex justify-content-end m-3">Responder</button>
            </form>
        </div>
    </div>
</section>
@endsection