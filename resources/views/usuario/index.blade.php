<x-layout title=" Login ">

    <form action="" method="post">
        <div>
            <div class="mb-3 row">
                <label for="nome" class="form-label">E-mail:</label>
                <input  type="email" id="email" name="email" class="col-sm-2 col-form-label">
            </div>
            <div class="mb-3 row">
                <label for="nome" class="form-label">Senha:</label>
                <input  type="password" id="senha" name="senha" class="col-sm-2 col-form-label">
            </div>
            <a href="{{route('registro.create')}}"> Não tem um conta? </a>
        </div>

        <button type="submit" class="btn btn-dark mb-2">Login</button>
    </form>
</x-layout>
