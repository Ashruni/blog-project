
<?php

use App\Models\Post;

use Illuminate\Support\Facades\Route;

Route::get('/', function ()
{
    return view('welcome',['posts' => Post::all()]);

});
Route::get('register',[App\Http\Controllers\RegisterController::class,'create'])->middleware('guest');
Route::post('register',[App\Http\Controllers\RegisterController::class,'store'])->middleware('guest');
Route::post('logout',[App\Http\Controllers\SessionController::class,'destroy'])->middleware('auth')->name('logout');
Route::get('session',[App\Http\Controllers\SessionController::class,'create'])->middleware('guest');
Route::post('session',[App\Http\Controllers\SessionController::class,'check'])->middleware('guest');
Route::get('create/post',[App\Http\Controllers\PostCreateController::class,'create']);
Route::post('create/post',[App\Http\Controllers\PostCreateController::class,'posting']);
Route::get('category/{slug}',[App\Http\Controllers\CategoryCreateController::class,'show']);
Route::get('post/{slug}',[App\Http\Controllers\CategoryCreateController::class,'view']);
Route::get('/edit/{slug}',[App\Http\Controllers\CategoryCreateController::class,'edit']);
Route::post('/edit/post/{slug}',[App\Http\Controllers\CategoryCreateController::class,'postEdit']);
Route::get('delete/{slug}',[App\Http\Controllers\CategoryCreateController::class,'delete']);
