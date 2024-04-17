<?php

namespace App\Http\Controllers;

use App\Models\Disciplina;
use App\Http\Requests\StoreDisciplinaRequest;
use App\Http\Requests\UpdateDisciplinaRequest;
use Illuminate\Http\Request;

class DisciplinaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $disciplinas = \App\Models\Disciplina::all();
        return view('disciplinas', ['disciplinas' => $disciplinas ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request, Disciplina $disciplina)
    {
        return view('form-incluir-disciplina', ['disciplina' => $disciplina]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $disciplina = new \App\Models\Disciplina;
        $disciplina -> create ( ['disciplina' => $request-> disciplina ] );
        return Redirect()->route('disciplinas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Disciplina $disciplina)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $disciplina = \App\Models\Disciplina::find($request->id);
        return view('form-disciplina', ['disciplina' => $disciplina]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Disciplina $disciplina)
    {
        $d = Disciplina::find($request->id);
        $d->disciplina = $request->disciplina;

        $d->save();

        return Redirect()->route('disciplinas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Disciplina $disciplina)
    {
        $disciplina = \App\Models\Disciplina::find($request->id);
        $disciplina -> delete();

        return Redirect()->route('disciplinas.index');
    }
}