<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Post;
use DB;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }
    public function store()
    {

        $credentials= request()->validate([
            'username'=>['required','max:50','min:3','unique:users,username'],
            'name'=>['required','min:3','max:255'],
            'password'=>['required','min:8','max:50'],
            'email'=>['required','min:5','email','max:255','unique:users,email'],
        ]);
        $credentials['password']= bcrypt($credentials['password']);
        $user= User::create($credentials);
        auth()->login($user);
        // DD();
        $userId=auth()->user()->id;
        session()->flash('success','Your account has been created');

        $dataS= DB::table('posts')->where('user_id', '=', auth()->user()->id)->get();

        return redirect('/')
            ->with('success','Welcome Back' )->with('dataS', $dataS);





    }
}
