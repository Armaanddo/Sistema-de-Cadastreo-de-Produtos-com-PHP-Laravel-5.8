@extends('layout.app', ["current"=>"categorias"])
@section('body')
    
<div class="card border">
    <div class="card-body">
        <form action="/categorias" name="categoria" method="POST" onsubmit="validar(this)">
            @csrf
            <div class="form-group">
                <label for="nomeCategoria">Nome da Categoria</label>
                <input type="text" class="form-control" name="nomeCategoria" placeholder="Categoria"  required maxlength="100" minlength="2">
            </div>
            <div class="form-group">
                <label for="descricaoCategoria">Descrição da Categoria</label>
                <input type="text" class="form-control" name="descricaoCategoria" placeholder="Descrição da Categoria" >
            </div>
            <button type="submit" class="btn btn-primary btn-sm" onclick="validar()">Salvar</button>
            <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
        </form>
</div>
@endsection
<script>
    function validar(form){
        if(form.nome.value == "" ||form.nome.value == null){
            alert("Nome não informado");
            nome.focus();
        }
    }
</script>

