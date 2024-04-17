@extends('layouts.app')

@section('content')
    <div class="container">

        <form class="card p-2 form-dn" action="{{ route('disciplina.incluir') }}" method="POST">

            @csrf

            <div class="card-header">
                <div class="card-title">
             Incluir produtos
                </div>
            </div>

            <div class="card-body">
                <a href="{{ route('disciplina.novo') }}"></a>
                <div class="form-group">
                    <label for="id" class="label-form">ID</label>
                    <input type="number" name="id" id="id" class="form-control" value="0" readonly>
                </div>

                <div class="form-group">
                    <label for="disciplina" class="label-form">Cliente</label>
                    <input type="text" name="disciplina" id="disciplina" class="form-control"
                        value=""  required>
                </div>

            </div>

            <div class="card-footer">

                <a href="{{ route('disciplinas.index') }}" class="btn btn-info"> Início </a>
                <button type="submit" class="btn btn-info"> Salvar </button>
                <button type="reset" class="btn btn-dark"> Limpar </button>

            </div>

        </form>
    </div>
@endsection
