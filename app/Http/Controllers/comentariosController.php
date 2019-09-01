<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ComentariosModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class comentariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=DB::table("entradas")
                ->join("comentarios","comentarios.id_entradas","=","entradas.id")
                ->select("entradas.nombre_entrada","comentarios.created_at","comentarios.descripcion","comentarios.nombre","comentarios.correo")
                ->get();
        return view("admin.comentarios.index",["rol"=>$data]);
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
            ComentariosModel::create([
                'nombre_entrada'=>strtoupper($request->input('nombre')),
                'descripcion'=>$request->input('descripcion'),
                'id_entradas'=>$request->input('id_entradas'),
                'correo'=>$request->input('correo'),
                'nombre'=>$request->input('nombre'),
                'web'=>$request->input('web')
            ]);
        return redirect('blog');
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
