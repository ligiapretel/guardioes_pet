@extends('layouts.templateMenuLateral')

@section('title')
    Guardiões Pet | Editar ONG
@endsection

@section('content')


    <div class="card col-lg-8 col-md-12 col-sm-12 col-12 p-5 mt-5">
       <div class="col-md-12 mt-5">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Nome do pet</th>
                        <th scope="col">Ver página</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                 <tbody>
                    @forelse($pets as $pet)
                        <tr>
                            <th scope="row">{{$pet->id}}</th>
                                <td>{{$pet->name}}</td>
                                <td>{{$product->description}}</td>
                                <td>{{$product->quantity}}</td>

                                <td>
                                    <a class="btn btn-primary" href="pet/atualizar/{{$pet->id}}">Atualizar</a>
                                    <a class="btn btn-danger"  href="/produtos/deletar/{{$product->id}}">Deletar</a>
                                </td>
                            </th>
                        </tr>
                    @empty
                        <h4 class="text-danger">Não há produtos cadastrados</h4>
                        
                    @endforelse    
                    </tbody>

                </table>
            </div>
    <div>
  
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script> 
        <script src="/js/completaCep.js" type="text/javascript"></script>         
        <script src="/js/mostrarSenha.js" type="text/javascript"></script>         
        <script src="/js/mascaraTel.js" type="text/javascript"></script>         
@endsection