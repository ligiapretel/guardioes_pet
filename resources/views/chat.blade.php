@extends('layouts.templateMenuLateral')

@section('title')
    Guardiões Pet | Chat
@endsection

@section('content')
    <section class="col d-flex" >
        <!-- Início do chat-->
        <section class="col-6 col-md-3 col-lg-4 m-5">
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
        <div class="col-md-6 mt-5 pt-3">
            <div class="d-flex justify-content-start align-items-center mt-5">
                <img id="perfil-chat-guardiao" src="img/johndoe.png" alt="foto perfil guardião" />
                <div class="d-flex flex-column pt-3 pl-1">
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
                    placeholder="Responder a mensagem do Guardião aqui."></textarea>
                    <div class="row justify-content-end p-3">
                        <button type="submit" class="btn-roxo">Responder</button>
                    </div>
            </form>
        </div>
    </div>
</section>
@endsection