<?php

namespace App\Http\Controllers;

use App\Models\Manufacturer;
use App\Services\Logging\ViewLogger;
use Illuminate\Http\Request;

class ManufacturerController extends Controller
{

    public function create()
    {
        $manufacturer = Manufacturer::create(request()->all());

        return redirect('manufacturer/' . $manufacturer->id . '/view');
    }

    public function view(int $id,  ViewLogger $viewLogger)
    {
        $manufacturer =  Manufacturer::findOrfail($id);
        $viewLogger->logView($manufacturer);

        dd($manufacturer->toArray());
    }






}
