<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Exam extends Model
{
    // lo usamos para la eliminacion logica de los datos.
    use SoftDeletes;

    protected $fillable = [
        'title'
    ];

    // un examen lo pueden presentar muchos usuarios (belongsToMany: pertenece a muchos)
    public function users(){
        return $this->belongsToMany(User::class)
            ->withPivot('score')
            ->withTimestamps();
    }
}
