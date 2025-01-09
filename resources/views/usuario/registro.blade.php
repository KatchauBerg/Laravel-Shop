<x-layout title=" Registro ">

    <form action="" method="post">
        @csrf
        <div>
            <div class="mb-3 row">
                <label for="nome" class="form-label">Nome</label>
                <input  type="text" id="nome" name="nome" class="col-sm-2 col-form-label">
            </div>
            <div class="mb-3 row">
                <label for="nome" class="form-label">E-mail:</label>
                <input  type="email" id="email" name="email" class="col-sm-2 col-form-label">
            </div>
            <div class="mb-3 row">
                <label for="nome" class="form-label">Senha:</label>
                <input  type="password" id="senha" name="senha" class="col-sm-2 col-form-label">
            </div>

        </div>

        <button type="submit" class="btn btn-dark mb-2">Registrar-se</button>
    </form>
</x-layout>
