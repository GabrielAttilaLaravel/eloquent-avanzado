<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = ['name', 'body'];

    public function comments()
    {
        // morphMany le pasamos el modelo y el al cual hace relacion
        return $this->morphMany(Comment::class, 'commentable');
    }
}
