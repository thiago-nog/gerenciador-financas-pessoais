@extends('templates.main')

@section('content')
<h1 class="TitleDespesas">Cadastro de Tipo de Despesa</h1>
<div class="ContainerMainDepesas">
    <form method="POST" action="/tipos-despesa">
        {{ csrf_field() }}
        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição:</label>
            <input type="text" class="form-control" name="descricao" id="descricao">
        </div>

        <button type="submit" class="btn btn-primary BtnCreateDespesas">Salvar</button>
    </form>
</div>


@endsection