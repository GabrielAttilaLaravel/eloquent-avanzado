<?php

namespace App\Http\Controllers;

use App\Book;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUser($id){
        $user = User::find($id);

        return view('user', compact('user'));
    }
}
