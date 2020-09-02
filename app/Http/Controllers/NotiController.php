<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticias;

class NotiController extends Controller
{
    
    public function index(Request $request)
    {       
        if($request){

          


            $query = trim($request->get('search'));

            $posts = Noticias::where('created_at', 'LIKE', '%'.$query. '%' )
                ->orderBy('id', 'asc')
                ->paginate(6);

                return view('noti', compact('posts','query'));
                    
        }
        
        //$posts = Noticias::paginate(6);       
        //return view('noti', compact('posts', 'search'));
    }
}
