<x-layout title="Vendedores Cadastrados">
    <x-card-tabela title="Vendedores Cadastrados">
        <div>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                </tr>
                </thead>
                <tbody>
                @foreach($vendedores as $vendedor)
                    <tr>
                        <th scope="row" >{{$vendedor->id}}</th>
                        <td>{{$vendedor->nome}}</td>
                        <td class="d-flex justify-content-between align-items-center">{{$vendedor->email}}

                            <a href="{{ route('vendedores.edit', $vendedor->id) }}" class="btn btn-dark">Editar</a>
                            <form action="{{route('vendedores.destroy', $vendedor->id)}}" method="post" >
                                @csrf
                                @method('DELETE')

                                <button class="btn btn-danger btn-sm"> Deletar </button>
                            </form>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div>
            <a href="{{route('vendedores.create')}}" class="btn btn-dark mb-2">Cadastrar Vendedores</a>
            <a href="{{route('vendas.index')}}" class="btn btn-dark mb-2">Ver Vendas</a>
        </div>

    </x-card-tabela>
</x-layout>

