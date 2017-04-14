<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    // lo usamos para la eliminacion logica de los datos.
    use SoftDeletes;

    // relacion belongsTo (pertenece a)
    public function category(){
        return $this->belongsTo(Category::class);
    }

    // relacion belongsToMAny (Tiene muchos)
    public function user(){
        return $this->belongsTo(User::class);
    }
}
