<form action="{{$action}}" method="post">
    @csrf
    @method("PUT")
    <div style="">
        <div class="form-group col-md-12">

            <label class="form-label">Nome:</label>
            <input  type="text" id="txtNome" name="txtNome" class="form-control" required autofocus
                    @isset($nome)value="{{$nome}}"@endisset>
        </div>
        <br>
        <div class="form-group col-md-12">

            <label class="form-label">Email:</label>
            <input  type="email" id="txtEmail" placeholder="example@example.com" name="txtEmail" class="form-control" required autofocus
                    @isset($email)value="{{$email}}"@endisset>
        </div>

        <div>
            <input  type="hidden" id="txtVendedor" placeholder="example@example.com" name="txtVendedor" class="form-control" required autofocus
                    value="{{$vendedor}}">
        </div>
        <br>
        <button type="submit" class="btn btn-dark mb-2">Editar</button>
    </div>
</form>
