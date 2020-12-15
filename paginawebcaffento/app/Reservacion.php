<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservacion extends Model
{
    protected $fillable =['id_usuario','num_mesa','fecha','hora','motivo','descripcion','num_personas'];
}
