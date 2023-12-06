@extends('restaurante.layout')
@section('content')
    <div class="card" style="margin:20px;">
        <div class="card-header"><strong>Restaurante</strong></div>
        <div class="card-body">
            <form action="{{ url('restaurante') }}" method="post">
            {!! csrf_field() !!}
            <a href="{{ route('restaurante.create') }}" class="btn btn-primary">Adicionar Restaurante</a>
                <br/>
                <br/>
             
            </form>
        </div>
    </div>
@stop
