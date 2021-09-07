<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
        'author_id',
        'article_id',

    ];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function article()
    {
        return $this->belongsTo(Article::class);
    }

    public $timestamps = false;
}
