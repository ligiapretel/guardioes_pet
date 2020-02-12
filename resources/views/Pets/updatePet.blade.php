@extends('layouts.templateMenuLateral')

@section('title')
    Guardiões Pet | Cadastro de Animal
@endsection

@section('content')

<!-- início do formulário -->
    @if(isset($pet))
        <form action="/pet/atualizar" enctype="multipart/form-data" method="post"
            class="card col-lg-8 col-md-12 col-sm-12 col-12 p-5" id="formAnimal" style="width: 50rem">
        @csrf
            <input type="text" name="idPet" value="{{$pet->id}}" hidden>

            <!-- essa div é para o título -->
            <div class="form-group d-flex justify-content pb-2">
                <h3 class="tituloAnimal">Atualizar informações</h3>
            </div>
            <!--aqui começa o formulário -->
                <div class="form-group row">
                    <label for="nomeAnimal" class="col-sm-4 col-form-label">Nome do Animal</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="name" id="nomeAnimal" placeholder="Nome do Pet" value="{{$pet->name}}">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label" for="type">Tipo de Animal</label>
                    <div class="col-sm-2">
                        <input class="form-check-input" type="radio" name="type" id="type" value="Cachorro"  
                        {{ $pet->type == 'Cachorro' ? 'checked' : '' }} >
                        <label class="form-check-label" for="type">Cachorro</label>
                    </div>
                    <div class="col-sm-2">
                        <input class="form-check-input" type="radio" name="type" id="type" value="Gato" {{ $pet->type == 'Gato' ? 'checked' : '' }}>
                        <label class="form-check-label" for="type">Gato</label>
                    </div>
                </div>

            <div class="form-group row">
                <label class="col-sm-4 col-form-label" for="genero">Sexo do Animal</label>
                <div class="col-sm-2">
                    <input class="form-check-input" type="radio" name="sex" id="sex" value="M" {{ $pet->sex == 'M' ? 'checked' : '' }} >
                    <label class="form-check-label" for="sexoAnimal">Macho</label>
                </div>
                <div class="col-sm-2">
                    <input class="form-check-input" type="radio" name="sex" id="sex" value="F" {{ $pet->sex == 'F' ? 'checked' : '' }}>
                    <label class="form-check-label" for="sex">Fêmea</label>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label" for="animal_bearing">Porte do Animal</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="animal_bearing" id="animal_bearing" value="pequeno" {{ $pet->animal_bearing == 'pequeno' ? 'checked' : '' }}>
                    <label class="form-check-label" for="animal_bearing">Pequeno (até 10kg)</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="animal_bearing" id="animal_bearing" value="medio" {{ $pet->animal_bearing == 'medio' ? 'checked' : '' }}>
                    <label class="form-check-label" for="animal_bearing">Médio (de 10 a 25kg)</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="animal_bearing" id="animal_bearing" value="grande" {{ $pet->animal_bearing == 'grande' ? 'checked' : '' }}>
                    <label class="form-check-label" for="animal_bearing">Grande (acima de 25kg)</label>
                </div>
            </div>
            <div class="form-group row">
                <label for="coal_type" class="col-sm-4 col-form-label">Pelagem</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="coal_type" id="coal_type" placeholder="Cor e tipo de pêlo" value="{{$pet->coal_type}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="raca" class="col-sm-4 col-form-label">Raça</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="breed" id="breed" placeholder="Descrição da raça" value="{{$pet->breed}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="fotoAnimal" class="col-sm-4 col-form-label">Foto do Animal</label>
                <div class="col-sm-8">
                    <input type="file" class="form-control-file" id="picture" name="picture">
                </div>
            </div>
            <div class="form-group row">
                <label for="opcao" class="col-sm-4 col-form-label">Quais as opções para esse animal?</label>
                <div class="form-check form-check-inline col-lg-2 col-md-3 col-sm-4">
                    <input class="form-check-input" type="checkbox" name="adoption_available" id="opcaoAnimal" value="1" {{ $pet->adoption_available == '1' ? 'checked' : '' }} >
                    <label class="form-check-label" for="opcaoAnimal">Adoção</label>
                </div>
                <div class="form-check form-check-inline col-lg-3 col-md-3 col-sm-4">
                    <input class="form-check-input" type="checkbox" name="temporary_home_available" id="opcaoAnimal" value="1" {{ $pet->temporary_home_available == '1' ? 'checked' : '' }}>
                    <label class="form-check-label" for="opcaoAnimal">Lar Temporário</label>
                </div>
                <div class="form-check form-check-inline col-lg-2 col-md-3 col-sm-4">
                    <input class="form-check-input" type="checkbox" name="sponsorship_available" id="opcaoAnimal" value="1" {{ $pet->sponsorship_available == '1' ? 'checked' : '' }}>
                    <label class="form-check-label" for="opcaoAnimal">Apadrinhamento</label>
                </div>
            </div>
            <div class="form-group row">
                <label for="age" class="col-sm-4 col-form-label">Idade do animal</label>
                <div class="col-sm-8">
                    <input type="number" class="form-control" name="age" value="{{$pet->age}}">
                </div>
            </div>      

            <div>
                <div class="form-group row mt-4">
                    <label class="col-sm-4 col-form-label" for="castration">Castrado?</label>
                    <div class="col-sm-2">
                        <input class="form-check-input" type="radio" name="castration" id="castration" value="1" {{ $pet->castration == '1' ? 'checked' : '' }}>
                        <label class="form-check-label" for="castration">Sim</label>
                    </div>
                    <div class="col-sm-2">
                        <input class="form-check-input" type="radio" name="castration" id="castration" value="0" {{ $pet->castration == '0' ? 'checked' : '' }}>
                        <label class="form-check-label" for="castration">Não</label>
                    </div>
                </div>
            </div>

            <div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label" for="vaccinated">Vacinado?</label>
                    <div class="col-sm-2">
                        <input class="form-check-input" type="radio" name="vaccinated" id="vaccinated" value="1" {{ $pet->vaccinated == '1' ? 'checked' : '' }}>
                        <label class="form-check-label" for="vaccinated">Sim</label>
                    </div>
                    <div class="col-sm-2">
                        <input class="form-check-input" type="radio" name="vaccinated" id="vaccinated" value="0" {{ $pet->vaccinated == '0' ? 'checked' : '' }}>
                        <label class="form-check-label" for="vaccinated">Não</label>
                    </div>
                </div>
            </div>

            <div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label" for="deworming">Vermifugado?</label>
                    <div class="col-sm-2">
                        <input class="form-check-input" type="radio" name="deworming" id="deworming" value="1" {{ $pet->deworming == '1' ? 'checked' : '' }}>
                        <label class="form-check-label" for="deworming">Sim</label>
                    </div>
                    <div class="col-sm-2">
                        <input class="form-check-input" type="radio" name="deworming" id="deworming" value="0" {{ $pet->deworming == '0' ? 'checked' : '' }}>
                        <label class="form-check-label" for="deworming">Não</label>
                    </div>
                </div>
            </div>
            <div>
                <div class="row">
                    <label class="col-sm-6 col-form-label tituloCaracteristicasAnimal"
                        for="caracteristicas">Características do Pet:</label>
                </div>
                <p>Indique características do comportamento do animal. Marque todas as opções que se aplicam:</p>
                <div class= "form-group row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="col-lg-6 col-md-8 col-sm-6 col-xs-6">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="docile" id="caracAnimal"                        value="1" {{ $pet->docile == '1' ? 'checked' : '' }}>
                            <label class="form-check-label caracAnimal" for="caracAnimal">Dócil</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="like_affection" id="caracAnimal" value="1" {{ $pet->like_affection == '1' ? 'checked' : '' }}>
                            <label class="form-check-label caracAnimal" for="caracAnimal">Gosta de carinho</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="like_children" id="caracAnimal" value="1" {{ $pet->like_children == '1' ? 'checked' : '' }}>
                            <label class="form-check-label caracAnimal" for="caracAnimal">Gosta de crianças</label>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-8 col-sm-6 col-xs-6">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="live_well_with_animals" id="caracAnimal" value="1" {{ $pet->live_well_with_animals == '1' ? 'checked' : '' }}>
                            <label class="form-check-label caracAnimal" for="caracAnimal">Convive bem com outros animais</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="like_to_play" id="caracAnimal" value="1" {{ $pet->like_to_play == '1' ? 'checked' : '' }}>
                            <label class="form-check-label caracAnimal" for="caracAnimal">Gosta de brincar</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="well_behaved" id="caracAnimal" value="1" {{ $pet->well_behaved     == '1' ? 'checked' : '' }}>
                            <label class="form-check-label caracAnimal" for="caracAnimal">Faz as necessidades no lugar certo</label>
                        </div>
                    </div>
                </div>
                </div>
                <div class="form-group row p-3">
                    <label class="col-sm-4 col-form-label  tituloCaracteristicasAnimal" for="description">Descreva o pet:</label>
                    <textarea class="form-control" id="descricao" name="description" cols="30" rows="10"
                        placeholder="Fale mais sobre o animal: qual a sua história, suas características físicas e comportamentais, o tipo de lar que mais se adequaria, do que ele(a) gosta, etc.">{{ $pet->description }}</textarea>
                </div>
                <div class="botaoLimparECadastro">
                    <a class="btn-roxo bg-danger botaoAnimal" href="/pet/excluir/{{$pet->id}}">Excluir cadastro</a>
                    <button type="submit" class="btn-roxo botaoAnimal">Atualizar informações</button>
                </div>
        </form>

        @elseif(isset($result))

        <div class="card col-lg-8 col-md-12 col-sm-12 col-12 p-5 mt-5">
                    @if(isset($result))
                        @if($result)
                            <h3>As informações do pet foram atualizadas!</h3>
                        @else
                            <h3>Não foi possível atualizar informações. Tente novamente</h3>
                        @endif
                    @endif
                </div>
            </div>

        @else
            <h3>Você tentou acessar uma página que não existe :(</h3>
        @endif

@endsection