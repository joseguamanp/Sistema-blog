<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EntradasModel;
use  App\ComentariosModel;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function welcome()
    {
        $data=EntradasModel::all();
        return view('welcome',["data"=>$data]);
    }
    public function blog()
    {
        //$comen=ComentariosModel::where("id_entradas","=",$id)->get();
        $comen=ComentariosModel::all();
        $data=EntradasModel::all();
        return view('blog',["data"=>$data,"comen"=>$comen]);
    }
}
