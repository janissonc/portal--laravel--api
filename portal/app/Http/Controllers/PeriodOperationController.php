<?php

namespace App\Http\Controllers;

use App\Models\Period_operation;
use Illuminate\Http\Request;

class PeriodOperationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Period_operation::get());
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
        $period_operation = new Period_operation();
        $period_operation->evento_id = $request->input('evento_id');
        $period_operation->start = $request->input('start');
        $period_operation->end = $request->input('end');
        $period_operation->active = 1;
        $period_operation->is_deleted = 0;
        $period_operation->save();
        return response()->json($period_operation);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $period_operation = Period_operation::find($id);
        $period_operation->evento_id = $request->input('evento_id');
        $period_operation->start = $request->input('start');
        $period_operation->end = $request->input('end');
        $period_operation->active = $request->input('active');
        $period_operation->is_deleted = 0;
        $period_operation->save();
        return response()->json($period_operation);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $period_operation = Period_operation::find($id);
        $period_operation->active = 0;
        $period_operation->is_deleted = 1;
        $period_operation->save();
        return response()->json($period_operation);
    }
}
