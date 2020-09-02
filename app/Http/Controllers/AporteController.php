<?php

namespace App\Http\Controllers;

use App\Aporte;
use Illuminate\Http\Request;

class AporteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    


        $aporte = Aporte::paginate();

        return view('aporte.index', compact('aporte'));
    }

    public function descarga($adjunto)
    {

        $pathtoFile = public_path().'/public/aporte/archivos/'.$adjunto;
        return response()->download($pathtoFile);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('aporte.create');
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
            'adjunto' => 'required|mimes:jpeg,jpg,png,pdf|max:2048',
        ]);

        $archivo = $request->file('adjunto');
        $adjunto = rand() . '.' . $archivo->getClientOriginalExtension();
        $archivo->move(public_path('/public/aporte/archivos/'), $adjunto);
        
        $aporte = Aporte::create($request->all());
        $aporte->adjunto = $adjunto;$aporte->save();

        return redirect()->route('aporte.index', $aporte->id)
               ->with('info', 'guardado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Aporte  $aporte
     * @return \Illuminate\Http\Response
     */
    public function show(Aporte $aporte)
    {


        return view('aporte.show', compact('aporte'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Aporte  $aporte
     * @return \Illuminate\Http\Response
     */
    public function edit(Aporte $aporte)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Aporte  $aporte
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aporte $aporte)
    {
        $this->validate($request, [
            'adjunto' => 'required|mimes:jpeg,jpg,png,pdf|max:2048',
        ]);

        $archivo = $request->file('adjunto');
        $adjunto = rand() . '.' . $archivo->getClientOriginalExtension();
        $archivo->move(public_path('/public/aporte/archivos/'), $adjunto);
        
        $aporte->update($request->all());
        $aporte->adjunto = $adjunto;$aporte->update();

        return redirect()->route('aporte.index', $aporte->id)
               ->with('info', 'guardado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Aporte  $aporte
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aporte $aporte)
    {
        //
    }

}
