@extends('restaurante.layout')
@section('content')
    <div class="card" style="margin:20px;">
        <div class="card-header">Criar Novo Restaurante</div>
        <div class="card-body">
            <form action="{{ url('restaurante') }}" method="post">
                {!! csrf_field() !!}

                <label for="nome">Nome: </label>
                <input type="text" class="form-control" placeholder="Digite o nome.." name="nome"  id="nome">
                <br />

                <label for="tipo_cozinha">Tipo de Cozinha: </label>
                <input type="text" class="form-control" placeholder="Digite o tipo de cozinha.." id="tipo_cozinha" name="tipo_cozinha">
                <br />

                <label for="localizacao">Localizacao: </label>
                <input type="text" class="form-control"  placeholder="Digite a Localizacao.." id="localizacao" name="localizacao">
                <br />

                <label for="faixa_preco">Faixa de Preco: </label>
                <input type="text" class="form-control" placeholder="Digite a Faixa de Preco.." id="faixa_preco" name="faixa_preco">
                <br />

                <label for="is_favorite">Marcar como favorito:</label>
                <input type="checkbox" name="is_favorite" id="is_favorite">
                <br />

                <input type="submit" value="Save" class="btn btn-success">
                <br/>
            </form>
        </div>
    </div>
@stop
