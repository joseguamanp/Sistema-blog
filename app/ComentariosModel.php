<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class ComentariosModel extends Model
{
    use SoftDeletes;
    protected $table='comentarios';

     protected $fillable = [
        'descripcion',
        'id_entradas',
        'correo',
        'avatar',
        'nombre',
        'web'
    ];
    protected $dates = ['deleted_at'];
}
