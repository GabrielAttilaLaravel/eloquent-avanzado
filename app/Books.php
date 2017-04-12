<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Books extends Model
{
    // lo usamos para la eliminacion logica de los datos.
    use SoftDeletes;
}
