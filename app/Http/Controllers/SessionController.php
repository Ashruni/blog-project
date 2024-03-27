<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function create(){

        return view('session.create');

    }
    public function check(){
        $credentials=request()->validate([
            'email'=> ['required','unique:users,username'],
            'password'=> ['required','min:8','max:50'],
        ]);
        if (auth()->attempt($credentials))
        {
            return redirect('/')->with('success','Welcome Back' );
        }

    }

    public function destroy(){
        auth()->logout();
        return redirect('/')->with('success','Goodbye');
    }

}
