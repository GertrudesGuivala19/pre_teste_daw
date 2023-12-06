@extends('restaurante.layout')
@section('content')
    <div class="container">
        <div class="row" style="margin-20px">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Gestao do Restaurante</h2>

                    </div>
                    <div class="card-body">
                        <a href="{{ url('/restaurante/create') }}" class="btn btn-success btn-sm" title="Add New Student">
                            Adicionar
                        </a>
                        <br />
                        <br />
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nome</th>
                                        <th>Tipo de Cozinha</th>
                                        <th>Localizacao</th>
                                        <th>Faixa de Preco</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($restaurante as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->nome}}</td>
                                            <td>{{ $item->tipo_cozinha }}</td>
                                            <td>{{ $item->localizacao }}</td>
                                            <td>{{ $item->faixa_preco }}</td>

                                            <td>
                                                <a href="{{ url('/restaurante/' . $item->id) }}" title="View Restaurante"><button
                                                        class="btn btn-info btn-sm"><i class="fa fa-eye"
                                                            aria-hidden="true"></i> Ver</button></a>
                                                <a href="{{ url('/restaurante/' . $item->id . '/edit') }}"
                                                    title="Edit Restaurante"><button class="btn btn-primary btn-sm"><i
                                                            class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                        Editar</button></a>

                                                <form method="POST" action="{{ url('/restaurante' . '/' . $item->id) }}"
                                                    accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        title="Delete Restaurante" onclick="return confirm("Confirm
                                                        delete?")"><i class="fa fa-trash-o" aria-hidden="true"></i>
                                                        Deletar</button>
                                                </form>
                                                <a href="{{ url('/restaurante/' . $item->id) }}" title="Detalhes Restaurante"><button
                                                    class="btn btn-success btn-sm"><i class="fa fa-eye"
                                                        aria-hidden="true"></i> Detalhes</button></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>
@endsection
