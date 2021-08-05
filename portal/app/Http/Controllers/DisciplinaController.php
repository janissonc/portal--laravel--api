<?php

namespace App\Http\Controllers;

use App\Models\Disciplina;
use Illuminate\Http\Request;

class DisciplinaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Disciplina::get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $disciplina = new Disciplina;
        $disciplina->evento_id = $request->input('evento_id');
        $disciplina->nome = $request->input('nome');
        $disciplina->description = $request->input('description');
        $disciplina->active = 1;
        $disciplina->is_deleted = 0;
        $disciplina->save();
        return response()->json($disciplina);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json(Disciplina::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $disciplina = Disciplina::find($id);
        $disciplina->evento_id = $request->input('evento_id');
        $disciplina->nome = $request->input('nome');
        $disciplina->description = $request->input('description');
        $disciplina->active = $request->input('active');
        $disciplina->is_deleted = 0;
        $disciplina->save();
        return response()->json($disciplina);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $disciplina = Disciplina::find($id);
        $disciplina->active = 0;
        $disciplina->is_deleted = 1;
        $disciplina->save();
        return response()->json($disciplina);
    }
}
