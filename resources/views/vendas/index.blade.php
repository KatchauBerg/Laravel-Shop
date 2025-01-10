<x-layout title="Vendas">
    <div>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Vendedor</th>
                <th>Email</th>
                <th>Comissao</th>
                <th>Valor Sem Comissicao</th>
                <th>Valor Venda</th>
            </tr>

            </thead>
            <tbody>
            <tr>

                <td>1</td>
                <td>Ksante</td>
                <td>descioksante@gmail.com</td>
                <td>69.00</td>
                <td>8.5%</td>
                <td>63.13</td>
                {{--            <td class="list-group">--}}

                {{--                @foreach($vendas as $venda)--}}
                {{--                    <li class="list-group-item">{{$venda}}</li>--}}
                {{--                @endforeach--}}
                {{--            </td>--}}
            </tr>
            </tbody>
        </table>
    </div>

    <div>

        <a href="{{route('vendas.create')}}" class="btn btn-dark mb-2">Cadastrar Venda</a>
    </div>

</x-layout>

