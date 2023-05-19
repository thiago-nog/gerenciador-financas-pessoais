@extends('templates.main')

@section('content')
<h1 class="TitleDespesas">Detalhes do Tipo de Despesa</h1>
<div class="ContainerMainDepesas">
<form method="POST" action="/tipos-despesa/{{ $tipoDespesa->id }}" class="FormularioDelete">
    {{ csrf_field() }}

    <input type="hidden" name="_method" value="DELETE">
    <div class="mb-3 DescNegrito">
        Código: {{ $tipoDespesa->id }}
    </div>
    <div class="mb-3 DescNegrito">
        Descrição: {{ $tipoDespesa->descricao }}
    </div>

    <button type="submit" class="btn btn-primary btnTelaRemove">Remover</button>
</form>
</div>


@endsection