<?php

namespace App\Http\Controllers;

use App\Lider;
use Illuminate\Http\Request;

class LiderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request){


            $query = trim($request->get('search'));
            $lider_count = Lider::count();

            $lider = Lider::where('name', 'LIKE', '%'.$query. '%' )
                ->orderBy('id', 'asc')
                ->paginate(5);

            
            return view('lider.index', compact('lider', 'query', 'lider_count'));
        }
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function consulta(Request $request)
    {
        if($request){


            $query = trim($request->get('search'));
            $consulta_count = Lider::count();
            $repetido = Lider::where('candidato');                    
                  
            $consulta = Lider::where('candidato', 'LIKE', '%'.$query. '%' )
                ->orderBy('id', 'asc')
                ->paginate(5);

            
            return view('lider.consulta', compact('consulta', 'query', 'consulta_count', 'repetido' ));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lider = Lider::create($request->all());

        return redirect()->route('lider.index', $lider->id)
            ->with('info', 'Guardado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Lider  $lider
     * @return \Illuminate\Http\Response
     */
    public function show(Lider $lider)
    {
        return view('lider.show', compact('lider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lider  $lider
     * @return \Illuminate\Http\Response
     */
    public function edit(Lider $lider)
    {
        return view('lider.edit', compact('lider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lider  $lider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lider $lider)
    {
        $lider->update($request->all());

        return redirect()->route('lider.index', $lider->id)
            ->with('info', 'Editado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lider  $lider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lider $lider)
    {
        $lider->delete();

        return back()->with('info', 'Borrado con exito');
    }
}
