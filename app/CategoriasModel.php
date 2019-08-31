<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class CategoriasModel extends Model
{
    use SoftDeletes;
    protected $table='categorias';

     protected $fillable = [
        'nombre',
        'id_usuario'
    ];
    protected $dates = ['deleted_at'];
}
