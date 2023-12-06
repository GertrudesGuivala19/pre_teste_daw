@extends('restaurante.layout')
@section('content')

<div class="card" style="margin:20px;">
  <div class="card-header">Editar Restaurante</div>
  <div class="card-body">

      <form action="{{ url('restaurante/' .$restaurante->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$restaurante->id}}" id="id" />
        <label for="">Nome: </label>
        <input type="text" class="form-control" placeholder="Digite o nome.." name="nome"  id="nome" value="{{$restaurante->nome}}">
        <br />
        <label for="">Tipo de Cozinha: </label>
        <input type="text" class="form-control" placeholder="Digite o tipo de cozinha.." id="tipo_cozinha" name="tipo_cozinha" value="{{$restaurante->tipo_cozinha}}">
        <br />
        <label for="">Localizacao: </label>
        <input type="text" class="form-control"  placeholder="Digite a Localizacao.." id= "localizacao" name="localizacao" value="{{$restaurante->localizacao}}">
        <br />
        <label for="">Faixa de Preco: </label>
        <input type="text" class="form-control" placeholder="Digite a Faixa de Preco.." id ="faixa_preco" name="faixa_preco" value="{{$restaurante->faixa_preco}}">
        <br />
        <input type="submit" value="Update" class="btn btn-success">
        <br/>

    </form>

  </div>
</div>

@stop
