<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
    public function create()
    {
        $tag = Tag::create([
            'name' => 'Super',
        ]);

        dd($tag);
    }
}
