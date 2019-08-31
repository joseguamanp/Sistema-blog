<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CategoriasModel;
use Illuminate\Support\Facades\Auth;

class categoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=CategoriasModel::all();
        return view("admin.categorias.index",["rol"=>$data]);
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
        $user=Auth::user()->id;
            CategoriasModel::create([
                'nombre'=>strtoupper($request->input('etiqueta')),
                'id_usuario'=>$user
            ]);
        return redirect('categorias');
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
        $rol = CategoriasModel::find($id);
        return view('admin.categorias.edit',['rol'=>$rol]);
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
        $rol = CategoriasModel::find($id);
        $rol->nombre=strtoupper($request->input('nombre'));
        $rol->save();
        return redirect('categorias');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $global=CategoriasModel::find($id);        
        $global->delete();
        return redirect('categorias');
    }
}
