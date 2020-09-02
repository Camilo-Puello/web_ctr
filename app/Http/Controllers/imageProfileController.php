<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ImageProfile;

use App\imageVehicle;

use App\User;

use Auth;

class imageProfileController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function profile($id){

        $user = User::findOrfail($id);              
        $p_count = ImageProfile::where('user_id',$user->id)
        ->count();        
        $v_count = imageVehicle::where('user_id',$user->id)
        ->count();     
        $images = ImageProfile::where('user_id',$user->id)
        ->paginate(9);
             
        $vehicles = imageVehicle::where('user_id',$user->id)
        ->get();
       
        return view('users.profile',compact('images','vehicles','user','p_count','v_count'));
       
    }

    public function store(Request $request, ImageProfile $images){

       

        $this->validate($request, [
           
            'frontal' => 'required|image|mimes:jpeg,jpg,png|max:2048',
           
        ]);

      

        $image2 = $request->file('frontal');
        $frontal = rand() . '.' . $image2->getClientOriginalExtension();
        $image2->move(public_path('public/images/profile'), $frontal);

       

        $user = auth()->user();

        $images = new ImageProfile();        
        $images->user_id = $user->id;       
        $images->frontal = $frontal;
        $images->save();
        
        return redirect()->back();
    }


    
    public function update(Request $request){

        $this->validate($request, [
           
            'frontal' => 'required|image|mimes:jpeg,jpg,png|max:2048',
           
        ]);

         
       
         $images = ImageProfile::where('user_id', Auth::user()->id)
         ->get()->first();
          
        
        \File::delete(public_path('/public/images/profile/' . $images ->frontal));
       



       

        $image2 = $request->file('frontal');
        $frontal = rand() . '.' . $image2->getClientOriginalExtension();
        $image2->move(public_path('public/images/profile'), $frontal);

      

        $images->user_id = Auth::user()->id;      
        $images->frontal = $frontal;        
        $images->save();


        return redirect()->back();
    }
}
