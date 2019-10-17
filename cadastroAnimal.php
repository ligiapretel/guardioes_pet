


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Cadastro de Animais</title>
</head>
<body>
    <!-- include do header -->
    <main>
        <form action="" class="p-5">
            <!-- essa div é para o título -->
            <div class="form-group d-flex justify-content p-2">
                <h3>Cadastro de novo animal</h3>
            </div>
            <!--aqui começa o formulário -->
            <div class="form-group row">
                <label for="nomeAnimal">Nome do Animal</label>
                <input type="text" class="form-control" id="nomeAnimal" placeholder="Nome do Pet">
            </div>
            <div class="form-group row">
                <label for="tipo">Tipo de Animal</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="tipo" id="tipoAnimal" value="cachorro" >
                <label class="form-check-label" for="tipoAnimal">Cachorro</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="tipo" id="tipoAnimal" value="gato" >
                <label class="form-check-label" for="tipoAnimal">Gato</label>
            </div>
            <div class="form-group row">
                <label for="genero">Sexo do Animal</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sexo" id="sexoAnimal" value="macho" >
                <label class="form-check-label" for="sexoAnimal">Macho</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sexo" id="sexoAnimal" value="femea" >
                <label class="form-check-label" for="sexoAnimal">Fêmea</label>
            </div>
            <div class="form-group row">
                <label for="porte">Porte do Animal</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="porte" id="porteAnimal" value="pequeno" >
                <label class="form-check-label" for="porteAnimal">Pequeno (até 10kg)</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="porte" id="porteAnimal" value="medio" >
                <label class="form-check-label" for="porteAnimal">Médio (de 10 a 25kg)</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="porte" id="porteAnimal" value="grande" >
                <label class="form-check-label" for="porteAnimal">Grande (acima de 25kg)</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="porte" id="porteAnimal" value="todos" >
                <label class="form-check-label" for="porteAnimal">Todos</label>
            </div>
            <div class="form-group row">
                <label for="pelagem">Pelagem</label>
                <input type="text" class="form-control" id="pelagem" placeholder="Descrição da cor e tipo de pêlo">
            </div>
            <div class="form-group row">
                <label for="raca">Raça</label>
                <input type="text" class="form-control" id="raca" placeholder="Descrição da raça">
            </div>
            <div class="form-group row">
                <label for="fotoAnimal">Foto do Animal</label>
                <input type="file" class="form-control-file" id="fotoAnimal" >
            </div>
            <div class="form-group row">
                <label for="opcao">Quais as opções para esse animal?</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="opcao" id="opcaoAnimal" value="adocao" >
                <label class="form-check-label" for="opcaoAnimal">Adoção</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="opcao" id="opcaoAnimal" value="temporario" >
                <label class="form-check-label" for="opcaoAnimal">Lar Temporário</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="opcao" id="opcaoAnimal" value="apadrinhamento" >
                <label class="form-check-label" for="opcaoAnimal">Apadrinhamento</label>
            </div>
            <div class="form-group row">
                <label for="idade">Idade do Animal</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="idade" id="idadeAnimal" value="filhote" >
                <label class="form-check-label" for="idadeAnimal">até 1 ano (filhotes)</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="idade" id="idadeAnimal" value="jovem" >
                <label class="form-check-label" for="idadeAnimal">de 1 a 2 anos (jovens)</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="idade" id="idadeAnimal" value="jovem" >
                <label class="form-check-label" for="idadeAnimal">de 2 a 3 anos (jovens)</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="idade" id="idadeAnimal" value="jovem" >
                <label class="form-check-label" for="idadeAnimal">de 3 a 4 anos (jovens)</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="idade" id="idadeAnimal" value="jovem" >
                <label class="form-check-label" for="idadeAnimal">de 4 a 5 anos (jovens)</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="idade" id="idadeAnimal" value="jovem" >
                <label class="form-check-label" for="idadeAnimal">de 5 a 6 anos (adultos)</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="idade" id="idadeAnimal" value="jovem" >
                <label class="form-check-label" for="idadeAnimal">de 6 a 7 anos (adultos)</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="idade" id="idadeAnimal" value="jovem" >
                <label class="form-check-label" for="idadeAnimal">de 7 a 8 anos (adultos)</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="idade" id="idadeAnimal" value="jovem" >
                <label class="form-check-label" for="idadeAnimal">de 8 a 9 anos (adultos)</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="idade" id="idadeAnimal" value="jovem" >
                <label class="form-check-label" for="idadeAnimal">de 9 a 10 anos (adultos)</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="idade" id="idadeAnimal" value="jovem" >
                <label class="form-check-label" for="idadeAnimal">acima de 11 anos (idosos)</label>
            </div>
            <div class="form-group row">
                <label for="castrado">Castrado?</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="castrado" id="castrado" value="sim" >
                <label class="form-check-label" for="castrado">Sim</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="castrado" id="castrado" value="nao" >
                <label class="form-check-label" for="castrado">Não</label>
            </div>
            <div class="form-group row">
                <label for="vacina">Vacinado?</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="vacinado" id="vacinado" value="sim" >
                <label class="form-check-label" for="vacinado">Sim</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="vacinado" id="vacinado" value="nao" >
                <label class="form-check-label" for="vacinado">Não</label>
            </div>
            <div class="form-group row">
                <label for="vermes">Desvermifugado?</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="vermes" id="vermes" value="sim" >
                <label class="form-check-label" for="vermes">Sim</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="vermes" id="vermes" value="nao" >
                <label class="form-check-label" for="vermes">Não</label>
            </div>
            <div class="form-group row"> <!-- pesquisar como colocar em negrito -->
                <label for="caracteristicas">Características do Pet:</label>
            </div>
            <p>Indique características do comportamento do animal. Marque todas as opções que se aplicam:</p>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="caracAnimal" id="caracAnimal" value="docil" >
                <label class="form-check-label" for="caracAnimal">Dócil</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="carac" id="caracAnimal" value="carinho" >
                <label class="form-check-label" for="caracAnimal">Gosta de carinho</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="carac" id="caracAnimal" value="crianca" >
                <label class="form-check-label" for="caracAnimal">Gosta de crianças</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="carac" id="caracAnimal" value="idosos" >
                <label class="form-check-label" for="caracAnimal">Gosta de idosos</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="carac" id="caracAnimal" value="outrosAnimais" >
                <label class="form-check-label" for="caracAnimal">Convive bem com outros animais</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="carac" id="caracAnimal" value="brincar" >
                <label class="form-check-label" for="caracAnimal">Gosta de brincar</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="carac" id="caracAnimal" value="necessidades" >
                <label class="form-check-label" for="caracAnimal">Faz as necessidades no lugar certo</label>
            </div>
            <div class="form-group row"> <!-- pesquisar como colocar em negrito -->
                <label for="descricao">Descreva o pet:</label>
                <textarea class="form-control" id="descricao" cols="30" rows="10" placeholder="Fale mais sobre o animal: qual a sua história, suas características físicas e comportamentais, o tipo de lar que mais se adequaria, do que ele(a) gosta, etc."></textarea>
            </div>
            <button type="reset" class="btn btn-primary">Limpar dados</button>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </main>            
</body>
</html>