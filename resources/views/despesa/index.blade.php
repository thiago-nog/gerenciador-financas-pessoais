@extends('templates.main')

@section('content')
<h1>Despesas</h1>

<a class="btn btn-primary" href="/despesas/create" role="button">Novo</a>

@if (count($despesas) > 0)
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Descrição</th>
                <th scope="col">Vencimento</th>
                <th scope="col">Valor</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($despesas as $d)
            <tr>
                <td>{{ $d->descricao }}</td>
                <td>{{ $d->data_vencimento }}</td>
                <td>{{ $d->valor }}</td>
                <td>
                    <a class="btn btn-primary" 
                        href="/despesa/{{ $d->id }}/edit" 
                        role="button">Editar</a>
                    <a class="btn btn-primary" 
                        href="/despesa/{{ $d->id }}" 
                        role="button">Remover</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endif

@endsection