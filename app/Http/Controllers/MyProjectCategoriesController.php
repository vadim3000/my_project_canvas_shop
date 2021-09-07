<?php

namespace App\Http\Controllers;

use App\Models\Manufacturer;
use Illuminate\Http\Request;
use App\Models\MyProjectCategories;

class MyProjectCategoriesController extends Controller
{
    public function create(){
        $myProjectCategory = MyProjectCategories::create([
            'name' => 'Photo Gifts',
            'description' => 'Categories about Photo Gifts',
        ]);

//        $myProjectCategory = MyProjectCategories::create([]);
        dd($myProjectCategory->toArray());
    }
}
