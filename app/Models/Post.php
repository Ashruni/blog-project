<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'body',
        'excerpt',
        'category_id',
        'slug',
        'author',
        'user_id'
    ];

    public function Category(){

        return $this->belongsTo(Category::class);
    }
}
