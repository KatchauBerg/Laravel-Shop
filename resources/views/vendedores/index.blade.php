<x-layout title=" Login ">
    <x-card-venda title="Login">
        <form action="{{route('vendas.index')}}" method="get">
            @csrf
            <div style="margin-left: 10px">
                <div class="form-group col-md-12">

                    <label class="form-label">Nome:</label>
                    <input  type="text" id="tituloProduto" name="tituloProduto" class="form-control required text-right" required autofocus>
                </div>
                <br>
                <div class="form-group col-md-12">

                    <label class="form-label">Email:</label>
                    <input  type="email" id="emailVendedor" placeholder="example@example.com" name="email" class="form-control text-right" required autofocus>
                </div>
                <br>
                <a href="{{route('registro.create')}}"> Não tem um conta? </a>
                <br>
                <br>

                <button type="submit" class="btn btn-dark mb-2">Login</button>
            </div>
        </form>
    </x-card-venda>
</x-layout>
