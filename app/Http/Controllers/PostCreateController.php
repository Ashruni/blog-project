<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User;

use DB;

class PostCreateController extends Controller
{
    public function create(){
        return view('post.create');
    }
    public function posting(){
        $details = request()->validate([
            'title'=>['required'],
            'body'=>['required'],
            'excerpt'=>['required'],
            'category_id'=>['required',Rule::exists('categories','id')],
            'slug'=>['required',Rule::unique('posts','slug')],
            'author'=>['required'],

        ]);
        $details['user_id']=auth()->id();
        $posts=Post::create($details);
        return redirect("/")->with('success','SUCCESSFULLY POSTED');




    }
}
