<?php

namespace App\Http\Controllers;
use Illuminate\Validation\ValidationException;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use DB;
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
        if (! auth()->attempt($credentials))
        {
            throw ValidationException::withMessages([
                'email'=>'your provided credentials could not be verified'
            ]);
        }
        // $userId=auth()->user()->id;
        $dataS= DB::table('posts')->where('user_id', '=', auth()->user()->id)->get();
        // DD($data);
        session()->regenerate();
            return redirect('/')->with('success','Welcome Back' )->with('',$dataS);


    }

    public function destroy(){
        auth()->logout();
        return redirect('/')->with('success','Goodbye');
    }

}
