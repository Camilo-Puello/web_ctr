<?php

namespace App\Http\Controllers;

use App\Propietarios;
use Illuminate\Http\Request;

class PropietariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if($request){
            $propietario_count = Propietarios::count();


            $query = trim($request->get('search'));

            $propietario = Propietarios::where('name', 'LIKE', '%'.$query. '%' )
                ->orderBy('id', 'asc')
                ->paginate(5);

          
            return view('propietarios.index', compact('propietario', 'query', 'propietario_count'));
        }
        //$propietario = Propietarios::paginate();

        //return view('propietarios.index', compact('propietario'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Propietarios.create');
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
            'image_1' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'image_2' => 'required|image|mimes:jpeg,jpg,png|max:2048',
        ]);

        $image = $request->file('image_1');
        $image_1 = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('/public/images/propietarios/vehicles/'), $image_1);

        $image = $request->file('image_2');
        $image_2 = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('/public/images/propietarios/vehicles/'), $image_2);

        $propietario = Propietarios::create($request->all());
        $propietario->image_1 = $image_1;
        $propietario->image_2 = $image_2;
        $propietario->save();

        return redirect()->route('propietarios.index', $propietario->id)
               ->with('info', 'Vehiculo guardada con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Propietarios  $propietario
     * @return \Illuminate\Http\Response
     */
    public function show(Propietarios $propietario)
    {
        return view('propietarios.show', compact('propietario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Propietarios  $propietario
     * @return \Illuminate\Http\Response
     */
    public function edit(Propietarios $propietario)
    {
        return view('propietarios.edit', compact('propietario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Propietarios  $propietario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Propietarios $propietario)
    {
        $this->validate($request, [
            'image_1' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'image_2' => 'required|image|mimes:jpeg,jpg,png|max:2048',
        ]);

        $image = $request->file('image_1');
        $image_1 = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('/public/images/propietarios/vehicles/'), $image_1);

        $image = $request->file('image_2');
        $image_2 = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('/public/images/propietarios/vehicles/'), $image_2);

        $propietario->update($request->all());
        $propietario->image_1 = $image_1;
        $propietario->image_2 = $image_2;
        $propietario->update();

        return redirect()->route('propietarios.edit', $propietario->id)
               ->with('info', 'Vehiculo actualizado con exito');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Propietarios  $propietario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Propietarios $propietario)
    {
        $propietario->delete();

        return back()->with('info', 'Vehiculo eliminado correctamente');
    }
}
