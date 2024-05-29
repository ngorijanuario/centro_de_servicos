@extends('componentes.main')

@section('title', 'CS | Adicionar')

@section('content')
{{-- Estrutura do formulario de adicionar serviço --}}
<div class="col-md-6 offset-md-3">
    <form action="/servicos" method="POST" enctype="multipart/form-data">
        @csrf
    <fieldset>
        <legend>Adicione Serviço</legend>
        <div class="mb-3">
            <label for="imagem" class="form-label">Imagem do Serviço</label>
            <input class="form-control" type="file" id="imagem" name="imagem">
        </div>
        <div class="mb-3">
            <label for="nomeDoservico" class="form-label">Nome do serviço</label>
            <input type="text" class="form-control" id="nomeDoservico" name="nomeDoservico" placeholder="Qual é o Serviço?">
        </div>
        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <textarea class="form-control" id="descricao" name="descricao" rows="3" placeholder="O que fazes?"></textarea>
        </div>
        <div class="mb-3">
            <label for="valor" class="form-label">Valor</label>
            <input type="number" class="form-control" id="valor" name="valor" placeholder="Ex. 20.000">
        </div>
        <div class="mb-3">
            <label for="contacto" class="form-label">Contacto</label>
            <input type="numer" class="form-control" id="contacto" name="contacto" placeholder="Ex. 932234432">
        </div>
        <button type="submit" class="btn btn-primary">Adicionar</button>
        <br><br>
    </fieldset>
    </form>
</div>
@endsection()