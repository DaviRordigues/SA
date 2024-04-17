@extends('layouts.app')

@section('content')
    <div class="container" >
        <h2>Produtos</h2>
        <table class="table table-hover table-striped table-dark shadow">
            <thead>
                <tr>
                    <th width="50">ID</th>
                    <th width="*">Cliente</th>
                    <th width="180">Criado em</th>
                    <th width="180">Atualizado em</th>
                    <th width="180">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($disciplinas as $disciplina)
                    <tr>
                        <td>{{ $disciplina->id }}</td>
                        <td>{{ $disciplina->disciplina }}</td>
                        <td>{{ $disciplina->created_at }}</td>
                        <td>{{ $disciplina->updated_at }}</td>
                        <td>
                            <a href="{{ route('disciplina.editar', ['id' => $disciplina->id]) }}"
                                class="btn btn-info btn-sm">Editar</a>
                            <a href="{{ route('disciplina.delete', ['id' => $disciplina->id]) }}"
                                class="btn btn-danger btn-sm">Excluir</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>

            <tfoot>
                <tr>

                    <th colspan="5">

                        #Número de Clientes: {{ App\Models\Disciplina::count() }}

                    </th>
                </tr>
            </tfoot>
        </table>
        <a href="{{ route('disciplina.novo') }}" class="btn btn-dark">Novo</a>

        <a class="btn btn-aviso my-3" href="{{ route('inicio') }}">Voltar para o inicio</a>


    </div>

@endsection
