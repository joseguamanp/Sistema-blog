<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EntradasModel;
use Illuminate\Support\Facades\Auth;

class entradasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.entradas.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=EntradasModel::all();
        return view("admin.entradas.mostrar",["rol"=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $user=Auth::user()->id;
            EntradasModel::create([
                'nombre_entrada'=>strtoupper($request->input('nombre')),
                'descripcion'=>$request->input('descripcion'),
                'id_usuario'=>$user
            ]);
        return redirect('entradas/create');
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
        $data=EntradasModel::find($id);
        return view("admin.entradas.ver",["rol"=>$data]);
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
        $data=EntradasModel::find($id);
        $data->nombre_entrada=strtoupper($request->input('nombre'));
        $data->descripcion=$request->input('descripcion');
        $data->save();
        return redirect("entradas/create");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $global=EntradasModel::find($id);        
        $global->delete();
        return redirect('entradas/create');
    }
}
