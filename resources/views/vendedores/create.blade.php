<x-layout title="Cadastro de Vendedor">
    <x-card-venda title="Cadastro de Vendedor">
        <form action="{{route('vendedores.store')}}" method="post">
            @csrf
            <div style="">
                <div class="form-group col-md-12">

                    <label class="form-label">Nome:</label>
                    <input  type="text" id="txtNome" name="txtNome" class="form-control" required autofocus>
                </div>
                <br>
                <div class="form-group col-md-12">

                    <label class="form-label">Email:</label>
                    <input  type="email" id="txtEmail" placeholder="example@example.com" name="txtEmail" class="form-control" required autofocus>
                </div>
                <br>
                <button type="submit" class="btn btn-dark mb-2">Cadastra Vendedor</button>
            </div>
        </form>
    </x-card-venda>
</x-layout>
