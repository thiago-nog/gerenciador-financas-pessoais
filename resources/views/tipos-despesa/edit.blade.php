@extends('templates.main')

@section('content')
<h1>Detalhes do Tipo de Despesa</h1>
<form method="POST" action="/tipos-despesa/{{ $tipoDespesa->id }}">
    {{ csrf_field() }}

    <input type="hidden" name="_method" value="PATCH">
    <div class="mb-3">
        Código: {{ $tipoDespesa->id }}
    </div>
    <div class="mb-3">
        <label for="descricao" class="form-label">Descrição:</label>
        <input type="text" 
            class="form-control" 
            name="descricao" 
            id="descricao"
            value="{{ $tipoDespesa->descricao }}">
    </div>

    <button type="submit" class="btn btn-primary" alt="Salvar" title="Salvar"><span class="material-symbols-outlined">save</span></button>
</form>

@endsection