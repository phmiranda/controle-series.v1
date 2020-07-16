@extends('layout')

@section('cabecalho')
    Cadastro de Série
@endsection

@section('conteudo')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post">
        @csrf
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input id="nome" class="form-control" type="text" name="nome">
        </div>
        <button class="btn btn-primary">Salvar</button>
    </form>
@endsection
