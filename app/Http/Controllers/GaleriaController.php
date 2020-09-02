<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\imageVehicle;

class GaleriaController extends Controller
{
     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     public function index()
    {
        $fotos = imageVehicle::paginate(9);        

        return view('galeria', compact('fotos'));

    }
   
}