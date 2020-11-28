<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServicioDomocilio extends Model
{
    protected $fillable =['id_usuario','id_producto','direccion','referencias'];
}
