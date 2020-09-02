<?php

namespace App\Http\Controllers;

use App\serv;

use Illuminate\Http\Request;

class ServController extends Controller
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
           

            $posts = Serv::where('created_at', 'LIKE', '%'.$query. '%' )
                ->orderBy('id', 'asc')
                ->paginate(6);

                return view('serv', compact('posts','query'));
                    
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('servicios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $servicio = Serv::create($request->all());

        return redirect()->route('servicios.edit', $servicio->id)
               ->with('info', 'Servicio guardado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\serv  $servicio
     * @return \Illuminate\Http\Response
     */
    public function show(serv $servicio)
    {
        return view('servicios.show', compact('servicio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\serv  $servicio
     * @return \Illuminate\Http\Response
     */
    public function edit(serv $servicio)
    {
        return view('servicios.edit', compact('servicio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\serv  $servicio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, serv $servicio)
    {
        $servicio->update($request->all());

        return redirect()->route('servicios.edit', $servicio->id)
               ->with('info', 'servicio actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\serv $servicio
     * @return \Illuminate\Http\Response
     */
    public function destroy(serv $servicio)
    {
        $servicio->delete();

        return back()->with('info', 'servicio eliminado correctamente');
    }
}
