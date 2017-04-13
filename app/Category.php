<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // relacion hasMany (tiene muchos)
    public function books(){
        return $this->hasMany(Books::class);
    }
}
