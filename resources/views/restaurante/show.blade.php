@extends('restaurante.layout')
@section('content')

<div class="card" style="margin:20px;">
  <div class="card-header">Pagina de Restaurante</div>
  <div class="card-body">
        <div class="card-body">
        <p class="card-title">Nome : {{ $restaurante->nome }}</p>
        <p class="card-text">Tipo de Cozinha : {{ $restaurante->tipo_cozinha }}</p>
        <p class="card-text">Localizacao : {{ $restaurante->localizacao }}</p>
        <p class="card-text">Faixa de Preco : {{ $restaurante->faixa_preco }}</p>

        <p class="card-text">
            <strong>Menu do Restaurante :</strong>
            <table class="table table-bordered table-striped mt-3">
                <thead class="thead-dark">
                    <tr>
                        <th>Nome do Prato</th>
                        <th>Descrição</th>
                        <th>Preço</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Carnes vermelhas</td>
                        <td>1kg de carne de vaca, Porco e cabrito</td>
                        <td>3000,00 MT</td>
                    </tr>
                    <tr>
                        <td>Mariscos</td>
                        <td>1kg de Peixe Cerra, Caranguejos e Lulas</td>
                        <td>7000,00 MT</td>
                    </tr>
                    <tr>
                        <td>Bebidas Alcoolicas</td>
                        <td>500ml de Brutal, 2M, Amarula, Moet</td>
                        <td>500,00 MT</td>
                    </tr>
                </tbody>
            </table>
        </p>
        <input type="submit" value="Voltar" class="btn btn-success">
        <br/>
    </div>
  </div>
</div
