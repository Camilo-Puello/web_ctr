<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticias;
use App\Empresa;

class WelcomeController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Noticias::all();
        $emp = Empresa::all();
        return view('home', compact('posts', 'emp'));
    }

}
