<?php

namespace App\Http\Controllers;

use App\Models\Blog\Article;
use App\Services\Logging\ViewLogger;

class BlogController extends Controller{

    public function index(){
        return view('pages/blog-list',['articles' => Article::all()]);
    }

    public function show(int $articleId, ViewLogger $viewLogger)
    {
        $article = Article::with('comments')->findOrFail($articleId);

        $viewLogger->logView($article);

        return view('pages/blog-article', ['article' => $article]);
    }

}
