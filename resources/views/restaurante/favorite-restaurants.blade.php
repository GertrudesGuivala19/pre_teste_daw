@extends('layouts.app')

@section('content')
    <h1>Restaurantes Favoritos</h1>

    @foreach($favoriteRestaurants as $restaurante)
        <p>
            {{ $restaurant->name }}
            <form action="{{ url("/restaurante/{$restaurante->id}/favorite") }}" method="post">
                @csrf
                <button type="submit">
                    {{ $restaurante->is_favorite ? 'Desmarcar como Favorito' : 'Marcar como Favorito' }}
                </button>
            </form>
        </p>
    @endforeach
@endsection
<!-- Em resources/views/favorite-restaurants.blade.php -->
<h1>Restaurantes Favoritos</h1>

@foreach($favoriteRestaurants as $restaurant)
    <p>{{ $restaurant->name }}</p>
@endforeach
