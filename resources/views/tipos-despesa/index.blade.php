@extends('templates.main')

@section('content')
<h1>Tipos de Despesa</h1>

<a class="btn btn-primary" href="/tipos-despesa/create" role="button" alt="Novo" title="Novo"><span class="material-symbols-outlined">add</span></a>

@if (count($tiposDespesa) > 0)
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Código</th>
                <th scope="col">Descrição</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tiposDespesa as $t)
            <tr>
                <td>{{ $t->id }}</td>
                <td>{{ $t->descricao }}</td>
                <td>
                    <a class="btn btn-primary" 
                        href="/tipos-despesa/{{ $t->id }}/edit" 
                        role="button" alt="Editar" title="Editar"><span class="material-symbols-outlined">edit</span></a>
                    <a class="btn btn-primary" 
                        href="/tipos-despesa/{{ $t->id }}" 
                        role="button" alt="Remover" title="Remover"><span class="material-symbols-outlined">delete</span></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endif

@endsection