<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Diagnostico;
use Redirect;
use Session;
use App\Http\Controllers\Controller;

class DiagnosticoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $diagnostico = Diagnostico::All();
        return view('diagnostico.index',compact('diagnostico'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('diagnostico.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         Diagnostico::create([
            'nombre'=>$request['nombre'],
            'apellido'=>$request['apellido'],
            'edad'=>$request['edad'],
             'peso'=>$request['peso'],
            'sangre_tipo'=>$request['sangre_tipo'],
              'alergias'=>$request['alergias'],
            'expediente'=>$request['expediente'],
            'antecedentes'=>$request['antecedentes'],
             'examen_orina'=>$request['examen_orina'],
            'examen_heces'=>$request['examen_heces'],
            'observaciones'=>$request['observaciones'],
             'path'=>$request['path'],
            ]);
            return redirect('/diagnostico')->with('message','store'); 
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
