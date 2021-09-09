<?php

namespace App\Http\Controllers;
use Illuminate\Mail;
use Mail

use App\Models\Blog\BlogCategory;
use Illuminate\Http\Request;

class BlogCategoriesController extends Controller
{
    public function create(){
        $blogCategories = new BlogCategory();
        $blogCategories->name = 'Economy';
        $blogCategories->description = 'News about Economy';
        $blogCategories->image = '123test.jpg';

        $blogCategories->save();

        dd($blogCategories);
    }

}
