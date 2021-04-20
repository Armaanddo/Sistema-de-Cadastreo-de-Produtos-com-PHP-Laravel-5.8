@extends('layout.app', ["current"=>"produtos"])
@section('body')

    <div class="card border">
        <div class="card-body">
            <form action="/produtos" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nomeProduto">Nome do Produto</label>
                    <input type="text" class="form-control" name="nomeProduto" placeholder="Produto">
                </div>
                <div class="form-group">
                    <label for="estoque">Estoque</label>
                    <input type="text" class="form-control" name="estoque" placeholder="N° de produtos em estoque">
                </div>
                <div class="form-group">
                    <label for="precp">Preço</label>
                    <input type="number" class="form-control" name="preco" placeholder="Preço do produto R$">
                </div>
                <div class="form-group">
                    <label for="categoriaId">Categoria</label>
                    <select name="categoriaProduto" id="categoriaProduto">
                        @foreach ($cats as $c)
                            <option value="{{ $c->id }}">{{ $c->nome }}</option>
                        @endforeach
                    </select>

                </div>

                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <button  class="btn btn-danger btn-sm" href="/produtos">Cancelar</button>
            </form>
        </div>
    @endsection


   