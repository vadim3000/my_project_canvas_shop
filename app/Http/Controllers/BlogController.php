<?php

namespace App\Http\Controllers;

use App\Models\Blog\Article;

class BlogController extends Controller{

    public function index(){
        return view('pages/blog-list',['articles' => Article::all()]);
    }

    public function show(int $articleId)
    {
        $article = Article::findOrFail($articleId);

        return view('pages/blog-article', ['article' => $article]);
    }

}
