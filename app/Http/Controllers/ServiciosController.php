<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\serv;

class ServiciosController extends Controller
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
            $servicio_count = serv::count();

            $servicio = serv::where('empresa', 'LIKE', '%'.$query. '%' )
                ->orderBy('id', 'asc')
                ->paginate(5);

            //return view('servicios.index', ['servicio'=> $servicio, 'search'=> $query]);
            return view('servicios.index', compact('servicio', 'query', 'servicio_count'));
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
        $this->validate($request, [
            'logo' => 'required|image|mimes:jpeg,jpg,png|max:2048',
        ]);

        $image = $request->file('logo');
        $logo = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('/public/images/servicios/logos/'), $logo);

        $servicio = Serv::create($request->all());
        $servicio->logo = $logo;$servicio->save();

        return redirect()->route('servicios.index', $servicio->id)
               ->with('info', 'Servicio creado con exito');
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
     * @param  \App\servicios  $servicio
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
        $this->validate($request, [
            'logo' => 'required|image|mimes:jpeg,jpg,png|max:2048',
        ]);

        $image = $request->file('logo');
        $logo = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('/public/images/servicios/logos/'), $logo);

        $servicio->update($request->all());
        $servicio->logo = $logo;$servicio->update();

        return redirect()->route('servicios.index', $servicio->id)
               ->with('info', 'servicio actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\serv  $servicio
     * @return \Illuminate\Http\Response
     */
    public function destroy(serv $servicio)
    {
        $servicio->delete();

        return back()->with('info', 'servicio eliminado correctamente');
    }
}
