@extends('layout')
@section('cabecalho')
    Lista de Séries
@endsection

@section('conteudo')
    <a class="btn btn-dark mb-2" href="/series/create">Adicionar Série</a>
        @if(!empty($mensagem))
            <div class="alert alert-success">
                {{$mensagem}}
            </div>
        @endif

        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th class="align-content-center" scope="col">ID</th>
                    <th class="align-content-center" scope="col">Nome</th>
                    <th class="align-content-center" scope="col">Ações</th>
                </tr>
            </thead>
            @foreach($series as $serie)
            <tbody>
                <tr>
                    <th scope="row">{{$serie->id}}</th>
                    <td>{{$serie->nome}}</td>
                    <td class="align-content-center" >
                        <form method="post" action="/series/{{$serie->id}}" onsubmit="return confirm('Tem certeza que deseja excluir a série: {{addslashes($serie->nome)}} ?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
@endsection
