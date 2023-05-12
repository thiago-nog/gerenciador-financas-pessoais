@extends('templates.main')

@section('content')
<h1>Detalhes do Tipo de Despesa</h1>
<form method="POST" action="/tipos-despesa/{{ $tipoDespesa->id }}">
    {{ csrf_field() }}

    <input type="hidden" name="_method" value="DELETE">
    <div class="mb-3">
        Código: {{ $tipoDespesa->id }}
    </div>
    <div class="mb-3">
        Descrição: {{ $tipoDespesa->descricao }}
    </div>

    <button type="submit" class="btn btn-primary">Remover</button>
</form>

@endsection