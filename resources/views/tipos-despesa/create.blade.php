@extends('templates.main')

@section('content')
<h1>Cadastro de Tipo de Despesa</h1>
<form method="POST" action="/tipos-despesa">
    {{ csrf_field() }}
    <div class="mb-3">
        <label for="descricao" class="form-label">Descrição:</label>
        <input type="text" class="form-control" name="descricao" id="descricao">
    </div>

    <button type="submit" class="btn btn-primary" alt="Salvar" title="Salvar"><span class="material-symbols-outlined">save</span></button>
</form>

@endsection