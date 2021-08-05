<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use Illuminate\Http\Request;

class PessoaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Pessoa::get());
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
        $pessoa = new Pessoa;
        $pessoa->situacao_id = 1;
        $pessoa->tipo_id = $request->input('tipo_id');
        $pessoa->nome = $request->input('nome');
        $pessoa->email = $request->input('email');
        $pessoa->telefone = $request->input('telefone');
        $pessoa->periodo = $request->input('periodo');
        $pessoa->data_nascimento = $request->input('data_nascimento');
        $pessoa->active = 1;
        $pessoa->is_deleted = 0;
        $pessoa->save();
        return response()->json($pessoa);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json(Pessoa::find($id));
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
        $pessoa = Pessoa::find($id);
        $pessoa->situacao_id = 1;
        $pessoa->tipo_id = $request->input('tipo_id');
        $pessoa->nome = $request->input('nome');
        $pessoa->email = $request->input('email');
        $pessoa->telefone = $request->input('telefone');
        $pessoa->periodo = $request->input('periodo');
        $pessoa->data_nascimento = $request->input('data_nascimento');
        $pessoa->active = $request->input('active');
        $pessoa->is_deleted = 0;
        $pessoa->save();
        return response()->json($pessoa);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pessoa = Pessoa::find($id);
        $pessoa->active = 0;
        $pessoa->is_deleted = 1;
        $pessoa->save();
        return response()->json($pessoa);
    }
}
