<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $filable = ['nombre','tipo','precio','ingredientes','img'];
}
