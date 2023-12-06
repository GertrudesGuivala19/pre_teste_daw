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
    </div>
  </div>
</div
