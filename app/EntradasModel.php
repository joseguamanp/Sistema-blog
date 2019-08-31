<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EntradasModel extends Model
{
    use SoftDeletes;
    protected $table='entradas';

     protected $fillable = [
        'nombre_entrada',
		'descripcion',
		'imagen_destacada', 
		'categoria',
		'id_usuario'
    ];
    protected $dates = ['deleted_at'];
}
