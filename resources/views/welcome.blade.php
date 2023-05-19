@extends('templates.main')

@section('content')
<h1 class="TitleHome">Bem vindo ao Gerenciador de Finanças Pessoais!</h1>
<div class="ContainerMain">
<table class="table  ContainerTable">
<thead>
    <tr class="Cabecalho">
    <th scope="col">#</th>
    <th scope="col">First</th>
    <th scope="col">Last</th>
    <th scope="col">Handle</th>
    </tr>
</thead>
<tbody class="ContainerBody">
    <tr>
    <th scope="row">1</th>
    <td>Mark</td>
    <td>Otto</td>
    <td>@mdo</td>
    </tr>
    <tr>
    <th scope="row">2</th>
    <td>Jacob</td>
    <td>Thornton</td>
    <td>@fat</td>
    </tr>
    <tr>
    <th scope="row">3</th>
    <td colspan="2">Larry the Bird</td>
    <td>@twitter</td>
    </tr>
</tbody>
</table>
</div>


@endsection