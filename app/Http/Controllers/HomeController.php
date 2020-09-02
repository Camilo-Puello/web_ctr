<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticias;
use App\Empresa;
use App\Generadoras;
use App\Transportes;
use App\User;

class HomeController extends Controller
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
        $transporte = Transportes::paginate(3);        
        $posts = Noticias::paginate(3);
        $emp = Empresa::paginate(3);
        $generadora = Generadoras::paginate(3);
        return view('home', compact('posts', 'emp', 'generadora', 'transporte'));
    }


   

    #Mostrar noticia por ID

    public function show($id)
    {
        $post = Noticias::find($id);

        return view('/show', ['post' => $post]);

    }
}
