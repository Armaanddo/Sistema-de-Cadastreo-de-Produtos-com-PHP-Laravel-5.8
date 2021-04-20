@extends('layout.app', ["current"=>"categorias"])

@section('body')
    <div class="card border">
        <div class="card-body">
            <h5 class="card-title">Cadastro de Categorias</h5>
            @if (count($cats) > 0)
                <table class="table table-ordered table-hover">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Nome da Categoria</th>
                            <th>Descrição da Categoria</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cats as $c)
                            <tr>
                                <td>{{ $c->id }}</td>
                                <td>{{ $c->nome }}</td>
                                <td>{{ $c->descricao }}</td>
                                <td><a href="/categorias/editar/{{ $c->id }}"
                                        class="btn btn-primary btn-sm">Editar</a></td>
                                <td><a href="/categorias/apagar/{{ $c->id }}"
                                        class="btn btn-danger btn-sm">Apagar</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <h5>Não há nenhuma categoria salva até o momento</h5>
            @endif
        </div>
        <div class="card-footer">
            <a href="/categorias/novo" class="btn btn-sm btn-primary" role="button">Nova Categoria</a>
        </div>
    </div>
@endsection
