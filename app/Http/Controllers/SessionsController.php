<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SessionsController extends Controller {

    public function create(){

        return view('auth.login');
    }

    public function store() {
        if(auth()->attempt(request(['email', 'password'])) == false ) {
            return back()-> withErrors([
                'message' => 'El correo o la contraseña son incorrectos, por favor inténtelo de nuevo',
            ]);
        } else {
            if(auth()->user()->rol == 'admin') {
                return redirect()->route('admin.index'); 
            } else {
                return redirect()->to('/'); 
            }
        }
    }
    public function destroy() {

        auth()->logout();
        
        return redirect()->to('/');
    }
}
