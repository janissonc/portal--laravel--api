<?php

namespace App\Http\Controllers;

use App\Models\Arquivos;
use Illuminate\Http\Request;

class ArquivosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Arquivos::get());
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
        $arquivos = new Arquivos;
        $arquivos->nome = $request->input('nome');
        $arquivos->path = $request->input('path');
        $arquivos->description = $request->input('description');
        $arquivos->active = 1;
        $arquivos->is_deleted = 0;
        $arquivos->save();
        return response()->json($arquivos);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json(Arquivos::find($id));
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
        $arquivos = Arquivos::find($id);
        $arquivos->nome = $request->input('nome');
        $arquivos->path = $request->input('path');
        $arquivos->description = $request->input('description');
        $arquivos->active = $request->input('active');
        $arquivos->is_deleted = 0;
        $arquivos->save();
        return response()->json($arquivos);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $arquivos = Arquivos::find($id);
        $arquivos->active = 0;
        $arquivos->is_deleted = 1;
        $arquivos->save();
        return response()->json($arquivos);
    }
}
