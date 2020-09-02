<?php

namespace App\Http\Controllers;

use App\Transportes;
use Illuminate\Http\Request;

class TransportesController extends Controller
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
            $transp_count = Transportes::count();

            $transporte = Transportes::where('name', 'LIKE', '%'.$query. '%' )
                ->orderBy('id', 'asc')
                ->paginate(5);

           
            return view('transportes.index', compact('transporte', 'query', 'transp_count'));
        }
        //$transporte = Transportes::paginate();

        //return view('transportes.index', compact('transporte'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('transportes.create');
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
            'pasado_judicial' => 'required|mimes:jpeg,png,jpg,pdf|max:2048',
        ]);

        $image = $request->file('logo');
        $logo = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('/public/images/conductores/'), $logo);

        $image = $request->file('pasado_judicial');
        $pasado_judicial = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('/public/images/conductores/'), $pasado_judicial);

        $transporte = Transportes::create($request->all());
        $transporte->logo = $logo;
        $transporte->pasado_judicial = $pasado_judicial;
        $transporte->save();

        return redirect()->route('transportes.index', $transporte->id)
               ->with('info', 'curriculum guardado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Transportes  $transporte
     * @return \Illuminate\Http\Response
     */
    public function show(Transportes $transporte)
    {
        return view('transportes.show', compact('transporte'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Transportes  $transporte
     * @return \Illuminate\Http\Response
     */
    public function edit(Transportes $transporte)
    {
        return view('transportes.edit', compact('transporte'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Transportes  $transporte
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transportes $transporte)
    {

        $this->validate($request, [
            'logo' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'pasado_judicial' => 'required|mimes:jpeg,png,jpg,pdf|max:2048',
        ]);

        $image = $request->file('logo');
        $logo = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('/public/images/conductores/'), $logo);

        $image = $request->file('pasado_judicial');
        $pasado_judicial = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('/public/images/conductores/'), $pasado_judicial);

        $transporte->update($request->all());
        $transporte->logo = $logo;
        $transporte->pasado_judicial = $pasado_judicial;
        $transporte->update();

        return redirect()->route('transportes.edit', $transporte->id)
               ->with('info', 'curriculum actualizado con exito');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Transportes  $transporte
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transportes $transporte)
    {
        $transporte->delete();

        return back()->with('info', 'Curriculum eliminado correctamente');
    }
}
