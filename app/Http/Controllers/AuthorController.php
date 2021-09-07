<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    public function create() {

        $author = new Author();
        $author->first_name = 'Huan';
        $author->last_name='Tretii';
        $author->email='huango667lban@test1.com';
        $author->phone='+852369741';

        $author->save();

        dd($author);

    }
}
