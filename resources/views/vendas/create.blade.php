<x-layout title="Cadastrar Venda" >

    {{--    <form class ="form-inline" action="" method="post" style="display: flex; justify-content: center">--}}
    <form class ="form-inline" action="{{route('vendas.store')}}" method="post">

        @csrf
        <div class="form-row" >

            <div class="form-group col-md-6">

                <label class="form-label">Produto Vendido:</label>
                <input  type="text" id="tituloProduto" name="tituloProduto" class="form-control">
            </div>

            <div class="form-group col-md-6">

                <label class="form-label">Email:</label>
                <input  type="email" id="emailVendedor" name="email" class="form-control">
            </div>

            <div class="form-group col-md-6">

                <label class="form-label">Valor da venda:</label>
                <input  type="text" id="precoVenda" name="precoVenda" class="form-control">
            </div>

            <div class="form-group mb-2">
                <label class="sr-only">Comissao sobre a venda:</label>
                <input type="text" readonly class="form-control-plaintext" id="valorComissao" value="8.5%">
            </div>

            <button type="submit" class="btn btn-dark mb-2">Registrar</button>
        </div>
    </form>
</x-layout>

