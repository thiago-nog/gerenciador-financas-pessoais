@extends('templates.main')

@section('content')

<h1 class="TitleDespesas">Cadastro de Usuário</h1>
<div class="ContainerMainDepesas">
    <form method="POST" action="/usuarios">
        {{ csrf_field() }}
        <div class="mb-3">
            <label for="login" class="form-label">Login:</label>
            <input type="text" class="form-control" name="login" id="login">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Senha:</label>
            <input type="password" class="form-control" name="password" id="password">
        </div>
        <div class="mb-3">
            <label for="passwordConfirm" class="form-label">Confirmação da senha:</label>
            <input type="password" class="form-control" name="passwordConfirm" id="passwordConfirm">
        </div>

        <button type="submit" class="btn btn-primary BtnCreateDespesas">Salvar</button>
    </form>
</div>



@endsection