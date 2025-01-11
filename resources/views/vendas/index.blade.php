<x-layout title="Vendas">
    <x-card-tabela title="Vendas">
        <div>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Valor do Produto</th>
                    <th scope="col">Valor da Venda</th>
                    <th scope="col">Comissão</th>
                    <th scope="col">Data Criação</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($vendas as $venda)
                        <tr>
                            <th scope="row">{{$venda->id}}</th>
                            <td>{{$venda->nome}}</td>
                            <td>{{$venda->email}}</td>
                            <td>{{$venda->valor_produto}}</td>
                            <td>{{$venda->valor_venda}}</td>
                            <td>{{$venda->comissao}}</td>
                            <td>{{$venda->created_at}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div>

            <a href="{{route('vendas.create')}}" class="btn btn-dark mb-2">Cadastrar Venda</a>
            <a href="{{route('vendedores.index')}}" class="btn btn-dark mb-2">Ver  Vendedores</a>
        </div>

    </x-card-tabela>
</x-layout>

