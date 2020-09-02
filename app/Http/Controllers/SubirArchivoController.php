<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subirarchivo;

class SubirArchivoController extends Controller
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
            $subir_count = Subirarchivo::count();

            $subir = Subirarchivo::where('nombre', 'LIKE', '%'.$query. '%' )
                ->orderBy('id', 'asc')
                ->paginate(3);

           
            return view('subirArchivo.index', compact('subir', 'query', 'subir_count'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('subirArchivo.create');
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
            'file' => 'required|mimes:jpeg,jpg,png,pdf|max:2048',
        ]);

        $image = $request->file('file');
        $file = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('/public/images/transportadora/logos/'), $file);
        
        $subir = Subirarchivo::create($request->all());
        $subir->file = $file;$subir->save();

        return redirect()->route('subirArchivo.index', $subir->id)
               ->with('info', 'Archivo guardado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subirarchivo  $subir
     * @return \Illuminate\Http\Response
     */
    public function show(Subirarchivo $subir)
    {


        return view('subirArchivo.show', compact('subir'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subirarchivo  $aporte
     * @return \Illuminate\Http\Response
     */
    public function edit(Subirarchivo $subir)
    {
        return view('subirArchivo.edit', compact('subir'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subirarchivo  $subir
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subirarchivo $subir)
    {
        $this->validate($request, [
            'file' => 'required|mimes:jpeg,jpg,png,pdf|max:2048',
        ]);

        $image = $request->file('file');
        $file = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('/public/images/transportadora/logos/'), $file);
        
        $subir->update($request->all());
        $subir->file = $file;$subir->update();

        return redirect()->route('subirArchivo.index', $subir->id)
               ->with('info', 'Archivo actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subirarchivo  $subir
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subirarchivo $subir)
    {
        $subir->delete();

        return back()->with('info', 'Archivo eliminado correctamente');
    }
}
