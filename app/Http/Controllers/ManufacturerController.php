<?php

namespace App\Http\Controllers;

use App\Models\Manufacturer;
use Illuminate\Http\Request;

class ManufacturerController extends Controller
{
    //

    public function create()
    {
//        $manufacturer = new Manufacturer();
//        $manufacturer->name = 'Test';
//        $manufacturer->description = 'Test description';
//        $manufacturer->active = true;
//        $manufacturer->save();

        $manufacturer = Manufacturer::create([
            'name' => 'Test create',
            'description' => 'Test create description',
            'active' => false,
        ]);

        $manufacturer = Manufacturer::create([]);

        dd($manufacturer->toArray());



    }



}
