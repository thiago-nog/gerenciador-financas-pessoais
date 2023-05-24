@extends('templates.main')

@section('content')
<h1 class='TitleDespesas'>Usuários</h1>
<div class="ContainerBtnDespesas"><a class="btn btn-primary  BtnTypeDespesa" href="/usuarios/create" role="button">Novo</a></div>

@if (count($usuarios) > 0)
<div class="ContainerMain">
<table class="table ContainerTable">
        <thead>
            <tr class="Cabecalho">
                <th scope="col">Código</th>
                <th scope="col">Login</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody class="ContainerBody">
            @foreach($usuarios as $u)
            <tr>
                <td>{{ $u->id }}</td>
                <td>{{ $u->login }}</td>
                <td class="BtnsRemoveEdit">
                    <a class="btn btn-primary BtnEdit" 
                        href="/usuariosa/{{ $u->id }}/edit" 
                        role="button">Editar</a>
                    <a class="btn btn-primary BtnRemove" 
                        href="/usuarios/{{ $u->id }}" 
                        role="button">Remover</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
    
@endif

@endsection