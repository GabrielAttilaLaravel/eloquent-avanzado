<?php

namespace App\Http\Controllers;

use App\Book;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getEditManytoMany($user_id){
        $user  = User::find($user_id);
        $books = Book::orderBy('title', 'ASC')->lists('title', 'id');
        return view('manytomany.edit', compact('user', 'books'));
    }

    public function putEditManyToMany(Request $request, $user_id){
        $user  = User::find($user_id);
        // sync: hace primero el detach y despues el attach para poder actualizar los registros de una tabla pivot
        $user->manyBooks()->sync($request->get('books'));
        return redirect('/');
    }
}
