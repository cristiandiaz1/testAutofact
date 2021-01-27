<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formulario extends Model
{
    protected $table = "formularios";
    protected $fillable = ['id', 'id_user','respuesta1','respuesta2','respuesta3'];
    protected $dates = ['created_at','updated_at'];
}
