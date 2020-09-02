<?php

namespace App\Http\Controllers;

use App\Noticias;
use Illuminate\Http\Request;

class NoticiasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(Request $request)
    {
        
        if($request){


            $query = trim($request->get('search'));
            $users_count = Noticias::count();

            $post = Noticias::where('tittle', 'LIKE', '%'.$query. '%' )
                ->orderBy('id', 'asc')
                ->paginate(5);

            
            return view('noticias.index', compact('post', 'query', 'users_count'));
        }
      

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('noticias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = request()->validate([
            'tittle' => 'required|max:255',
            'image' => 'required|image',
            'post_content' => 'required'
        ]);

        $image = $request->file('image');
        $newFileName = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('/public/images/noticias/'), $newFileName);
            
        $user = auth()->user();
        $post = new Noticias();

        $post->tittle = request('tittle');
        $post->content = request('post_content');
        $post->image_url = $newFileName;
        $post->userId = $user->id;

        $post->save();

        return redirect('/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Noticias  $noticias
     * @return \Illuminate\Http\Response
     */
    public function show(Noticias $noticias)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Noticias  $noticias
     * @return \Illuminate\Http\Response
     */
    public function edit(Noticias $post)
    {
        //
        $post = Noticias::find($post->id);

        return view('/noticias/edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Noticias  $noticias
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Noticias $post)
    {
        //
        $data = request()->validate([
            'tittle' => 'required|max:255',
            'image' => 'required|image',
            'post_content' => 'required'
        ]);

        $image = $request->file('image');
        $newFileName = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('/public/images/noticias/'), $newFileName);
            
        $post = Noticias::findOrFail($post->id);

        $post->tittle = request('tittle');
        $post->content = request('post_content');
        $post->image_url = $newFileName;

        $post->save();

        return redirect('/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Noticias  $noticias
     * @return \Illuminate\Http\Response
     */
    public function destroy(Noticias $post)
    {
        //
        $post = Noticias::find($post->id);

        #Eliminar noticia
        $post->delete();

        return redirect('/posts');
    }
}
