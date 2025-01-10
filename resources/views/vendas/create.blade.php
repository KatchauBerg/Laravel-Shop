<x-layout title="Cadastrar Venda" >
    <x-card-venda title="Cadastrar Venda">
        <form class ="form-inline" action="{{route('vendas.store')}}" method="post">

            @csrf
            <div class="form-row" >

                <div class="form-group col-md-12">

                    <label class="form-label">Produto Vendido:</label>
                    <input  type="text" id="tituloProduto" name="tituloProduto" class="form-control required text-right" required autofocus>
                </div>

                <div class="form-group col-md-12">

                    <label class="form-label">Email:</label>
                    <input  type="email" id="emailVendedor" placeholder="example@example.com" name="email" class="form-control required text-right" required autofocus>
                </div>

                <div class="form-group col-md-12">

                    <label class="form-label">Valor da venda:</label>
                    <input  type="number" id="precoVenda" name="precoVenda" class="form-control float" required autofocus>
                </div>

                <div class="form-group mb-2">

                    <label class="sr-only">Comissao sobre a venda:</label>
                    <input type="text" readonly class="form-control-plaintext" id="valorComissao" value="8.5%">
                </div>

                <button type="submit" class="btn btn-dark mb-2">Registrar</button>
            </div>
        </form>
    </x-card-venda>
{{--        <form class ="form-inline" action="{{route('vendas.store')}}" method="post" style="display: flex; justify-content: center">--}}
</x-layout>

