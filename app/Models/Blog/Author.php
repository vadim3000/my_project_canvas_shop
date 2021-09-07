<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone'
    ];


    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function articles(){
        return $this->hasMany(Article::class);
    }

    public $timestamps = false;
}
