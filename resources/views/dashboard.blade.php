@extends('componentes.main')

@section('title', 'CS | Conta')

@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h2>Meus Serviços</h2>
    @if(count($servicos) > 0)
    <p>Há um novo serviço que precisa de ser adicionado?</p>
    <a href="/servicos/adicionar/">clique aqui para adicionar.</a>
    @else
    <p>Você ainda não tem serviços cadastrados <a href="/servicos/adicionar/">Criar um serviço</a></p>
    @endif
    <table class="table">
    
    <thead>
    <tr>
      <th scope="row">#</th>
      <th>Descrição</th>
      <th>Valor</th>
      <th>Ferramentas</th>
    </tr>
    </thead>
 
  <tbody>
    @foreach($servicos as $servico)
    <tr>
      <th scope="col">{{ $loop->index + 1 }}</th>
      <td scope="col"><a href="/detalhes/{{ $servico -> id }}">{{ $servico ->NomeDoServiço }}</a></td>
      <td scope="col">{{ $servico ->Valor }}</td>
      <td scope="col"><a href="#">Editar</a></td>
    </tr>
    @endforeach
    </tbody>
</table>
</div>
@endsection()