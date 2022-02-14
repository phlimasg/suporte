<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CreateUserController extends Controller
{
    public function create()
    {
        return view('create_user');
    }

    public function save(Request $request)
    {        
        $usuario_criado = User::create($request->all());        
        return redirect()->back()->with('user', $usuario_criado);
    }
}
