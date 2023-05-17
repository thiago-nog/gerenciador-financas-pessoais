@extends('templates.main')

@section('content')
<h1>Cadastro de Despesa</h1>
<form method="POST" action="/despesas">
    {{ csrf_field() }}
    <div class="mb-3">
        <label for="descricao" class="form-label">Descrição:</label>
        <input type="text" class="form-control" name="descricao" id="descricao">
    </div>

    <div class="mb-3">
        <label for="valor" class="form-label">Valor:</label>
        <input type="text" class="form-control" name="valor" id="valor">
    </div>

    <div class="mb-3">
        <label for="vencimento" class="form-label">Vencimento:</label>
        <input type="date" class="form-control" name="vencimento" id="vencimento">
    </div>

    <div class="mb-3">
        <label for="tipoDespesa" class="form-label">Tipo de despesa:</label>
        <select class="form-select" id="tipoDespesa" name="tipoDespesa">
            @foreach($tiposDespesa as $t)
            <option value="{{ $t->id }}">{{ $t->descricao }}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Salvar</button>
</form>

@endsection