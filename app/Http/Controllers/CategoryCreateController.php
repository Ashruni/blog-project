<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Category;
use App\Models\Post;
class CategoryCreateController extends Controller
{
    public function show(){

        $slug=request()->slug;
        $category=DB::table('categories')->where('slug','=',$slug)->first();
        $category_id = $category->id;
        $category_name = $category->name;
        $categoryPost=DB::table('posts')->where('category_id','=',$category_id)->where('user_id','=',auth()->id())->get();
        // DD($categoryPost);
        return view('post.view')->with('categoryPost',$categoryPost)->with('category_name',$category_name);
    }
}
