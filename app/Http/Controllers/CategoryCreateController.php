<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Validation\Rule;
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

    public function view(){
       $slug = request()->slug;

       $dataCollections = DB::table('posts')->where('slug','=',$slug)->where('user_id','=',auth()->id())->get();
    //    DD($dataCollections);
       return view('post.display')->with('dataCollections',$dataCollections);
    }
    public function edit(){


        $slug = request()->slug;

        $dataCollections = DB::table('posts')->where('slug','=',$slug)->where('user_id','=',auth()->id())->get();
        // DD($data);
        return view('post.edit')->with('dataCollections',$dataCollections);
    }
    public function postEdit(){
       $slug = request()->slug;
          $editData = request()->validate([
            'title'=>['required'],
            'body'=>['required'],
            'excerpt'=>['required'],
            'category_id'=>['required',Rule::exists('categories','id')],
            'author'=>['required'],
            'slug'=>['required',Rule::unique('posts','slug')],
        ]);

        $editData['slug']=$slug;
        Post::find(auth()->id())->update($editData);
        return redirect('/');
    }
    public function delete(){

        $slug=request()->slug;
        DB::table('posts')->where('slug','=',$slug)->delete();
        return redirect('/')->with('success','SUCCESSFULLY DELETED');
    }
}
