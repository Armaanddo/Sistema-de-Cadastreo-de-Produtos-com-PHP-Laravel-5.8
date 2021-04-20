@extends('layout.app', ["current"=>"produtos"])
@section('body')

    <div class="card border">
        <div class="card-body">
            <form action="/produtos/{{ $prods->id }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nomeProduto">Nome do Produto</label>
                    <input type="text" class="form-control" name="nomeProduto" placeholder="Produto" value="{{ $prods->nome }}" >
                </div>
                <div class="form-group">
                    <label for="estoque">Estoque</label>
                    <input type="text" class="form-control" name="estoque" placeholder="N° de produtos em estoque" value="{{ $prods->estoque }}" >
                </div>
                <div class="form-group">
                    <label for="precp">Preço</label>
                    <input type="text" class="form-control" name="preco" placeholder="Preço do produto R$" value="{{ $prods->preco }}" >
                </div>
                <div class="form-group">
                    <!--<label for="categoriaId">Categoria</label>
                    <select name="categoriaProduto" id="categoriaProduto">
                        @foreach ($prods as $c)
                            <option value="{{ $c->id }}">{{ $c->nome }}</option>
                        @endforeach
                    </select>

                </div>-->

                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
            </form>
        </div>
    @endsection
   