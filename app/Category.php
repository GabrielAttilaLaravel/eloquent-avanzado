<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // relacion hasMany (tiene muchos)
    public function books(){
        return $this->hasMany(Book::class);
    }

    // retornaremos el numero de libros que posee la categoria con esta funcion la cual se comporta como si
    // fuese un atributo mas de la tabla
    public function getNumBooksAttribute(){
        return count($this->books);
    }
}
