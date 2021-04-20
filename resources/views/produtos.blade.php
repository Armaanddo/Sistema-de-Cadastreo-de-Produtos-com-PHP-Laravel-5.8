@extends('layout.app', ["current"=>"produtos"])

@section('body')
    <div class="card border">
        <div class="card-body">
            <h5 class="card-title">Cadastro de Produtos</h5>
            @if (count($prods) > 0)
                <table class="table table-ordered table-hover">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Nome do Produto</th>
                            <th>Estoque</th>
                            <th>Preço</th>
                            <th>ID da Categoria</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($prods as $p)
                            <tr>
                                <td>{{ $p->id }}</td>
                                <td>{{ $p->nome }}</td>
                                <td>{{ $p->estoque }}</td>
                                <td>{{ $p->preco }}</td>
                                <td>{{ $p->categoria_id }}</td>


                                <td><a href="/produtos/editar/{{ $p->id }}"
                                        class="btn btn-primary btn-sm">Editar</a></td>
                                <td><a href="/produtos/apagar/{{ $p->id }}"
                                        class="btn btn-danger btn-sm">Apagar</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <h5>Não há nenhuma produto salva até o momento</h5>
            @endif
        </div>
        <div class="card-footer">
            <a href="/produtos/novo" class="btn btn-sm btn-primary" role="button">Novo Produto</a>
        </div>
    </div>

   
@endsection

<!--@section('javascript')
    <script type="text/javascript">
        function novoProduto(){
            $('dlgProdutos').modal('show');
        }
    </script>
@endsection
-->