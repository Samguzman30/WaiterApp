<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SessionController extends Controller
{
    public function create() {
        return view('auth.session');
    }

public function store() { 

    if(auth()->attempt(request(['email', 'password']))  == false){
        return back()->withErrors([
            'message' => 'Correo o contraseña incorrecta, por favor intente de nuevo',
        ]);
    }
    return redirect()->to('/');
}


}



