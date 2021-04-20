@extends('layout.app', ["current"=>"categorias"])
@section('body')
    
<div class="card border">
    <div class="card-body">
        <form action="/categorias/{{$cats->id}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nomeCategoria">Nome da Categoria</label>
                <input type="text" class="form-control" name="nomeCategoria" placeholder="Categoria" value="{{$cats->nome}}">
            </div>
            <div class="form-group">
                <label for="descricaoCategoria">Descrição da Categoria</label>
                <input type="text" class="form-control" name="descricaoCategoria" placeholder="Descrição da Categoria" value="{{$cats->descricao}}">
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
        </form>
</div>
@endsection