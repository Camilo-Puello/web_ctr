<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\imageVehicle;

use App\User;

use Auth;

class imageVehicleController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request, imageVehicle $vehicles){

        $this->validate($request, [
            'lateral_izq' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'frontal' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'lateral_der' => 'required|image|mimes:jpeg,jpg,png|max:2048'
        ]);

        $image1 = $request->file('lateral_izq');
        $lateral_izq = rand() . '.' . $image1->getClientOriginalExtension();
        $image1->move(public_path('public/images/vehicle'), $lateral_izq);

        $image2 = $request->file('frontal');
        $frontal = rand() . '.' . $image2->getClientOriginalExtension();
        $image2->move(public_path('public/images/vehicle'), $frontal);

        $image3 = $request->file('lateral_der');
        $lateral_der = rand() . '.' . $image3->getClientOriginalExtension();
        $image3->move(public_path('public/images/vehicle'), $lateral_der);

        $user = auth()->user();

        $vehicles = new imageVehicle();
        $vehicles->user_id = $user->id;
        $vehicles->lateral_izq = $lateral_izq;
        $vehicles->frontal = $frontal;
        $vehicles->lateral_der = $lateral_der;

        $vehicles->save();


        return redirect()->back();
    }


    
    public function update(Request $request){

        $this->validate($request, [
            'lateral_izq' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'frontal' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'lateral_der' => 'required|image|mimes:jpeg,jpg,png|max:2048'
        ]);

         
       
         $vehicles = imageVehicle::where('user_id', Auth::user()->id)
         ->get()->first();
          
        \File::delete(public_path('/public/images/vehicle/' . $vehicles ->lateral_izq));
        \File::delete(public_path('/public/images/vehicle/' . $vehicles ->frontal));
        \File::delete(public_path('/public/images/vehicle/' . $vehicles ->lateral_der));



        $image1 = $request->file('lateral_izq');
        $lateral_izq = rand() . '.' . $image1->getClientOriginalExtension();
        $image1->move(public_path('public/images/vehicle'), $lateral_izq);

        $image2 = $request->file('frontal');
        $frontal = rand() . '.' . $image2->getClientOriginalExtension();
        $image2->move(public_path('public/images/vehicle'), $frontal);

        $image3 = $request->file('lateral_der');
        $lateral_der = rand() . '.' . $image3->getClientOriginalExtension();
        $image3->move(public_path('public/images/vehicle'), $lateral_der);

        $vehicles->user_id = Auth::user()->id;
        $vehicles->lateral_izq = $lateral_izq;
        $vehicles->frontal = $frontal;
        $vehicles->lateral_der = $lateral_der;
        $vehicles->save();


        return redirect()->back();
    }
}
