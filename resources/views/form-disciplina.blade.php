@extends('layouts.app')

@section('content')
    <div class="container">
        <form class="card p-2 form-dn" action="{{ route('disciplina.atualizar') }}" method="POST">

            @method('PUT')
            @csrf

            <div class="card-header">
                <div class="card-title">
                    Editando produtos
                </div>
            </div>

            <div class="card-body">
                <a href="{{ route('disciplina.novo') }}" class="btn btn-dark">Novo</a>
                <a href="{{ route('disciplinas.index') }}" class="btn btn-info"> Início </a>
                <div class="form-group">
                    <label for="id" class="label-form">ID</label>
                    <input type="number" name="id" id="id" class="form-control" value="{{ $disciplina->id }}"
                        readonly>
                </div>
                <div class="form-group">
                    <label for="disciplina" class="label-form">produto</label>
                    <input type="text" name="disciplina" id="disciplina" class="form-control"
                        value="{{ $disciplina->disciplina }}">
                </div>

            </div>

            <div class="card-footer">

                <button type="submit" class="btn btn-info shadow">Atualizar</button>
                <button type="reset" class="btn btn-dark shadow">Limpar</button>

            </div>

        </form>
    </div>
@endsection
