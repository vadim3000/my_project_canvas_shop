<?php

namespace App\Models\Blog;

use App\Models\LoggableInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model implements LoggableInterface
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
        'description',
        'published_at',
        'image',
        'author_id',
        'category_id',
    ];


    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function category()
    {
      return $this->belongsTo(BlogCategory::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public $timestamps = false;


    public function toArray(): array
    {
        return parent::toArray();
    }

    public function toString(): string
    {
        return 'Article with ' . $this->id;
    }

}
