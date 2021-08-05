<?php

namespace App\Http\Controllers;

use App\Models\Situacao;
use Illuminate\Http\Request;

class SituacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Situacao::get());
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
        $situacao = new Situacao;
        $situacao->nome = $request->input('nome');
        $situacao->description = $request->input('description');
        $situacao->active = 1;
        $situacao->is_deleted = 0;
        $situacao->save();
        return response()->json($situacao);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json(Situacao::find($id));
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
        $situacao = Situacao::find($id);
        $situacao->nome = $request->input('nome');
        $situacao->description = $request->input('description');
        $situacao->active = $request->input('active');
        $situacao->is_deleted = 0;
        $situacao->save();
        return response()->json($situacao);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $situacao = Situacao::find($id);
        $situacao->active = 0;
        $situacao->is_deleted = 1;
        $situacao->save();
        return response()->json($situacao);
    }
}
