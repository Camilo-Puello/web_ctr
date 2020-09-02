<?php

namespace App\Http\Controllers;

use App\Generadoras;
use Illuminate\Http\Request;

class GeneradorasController extends Controller
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
            $generadora_count = Generadoras::count();

            $generadora = Generadoras::where('name', 'LIKE', '%'.$query. '%' )
                ->orderBy('id', 'asc')
                ->paginate(5);

            
            return view('generadoras.index', compact('generadora', 'query', 'generadora_count'));
        }
        //$generadora = Generadoras::paginate();

        //return view('generadoras.index', compact('generadora'));
    }

  /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('generadoras.create');
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
        $image->move(public_path('/public/images/generadoras/logos/'), $logo);
        
        $generadora = Generadoras::create($request->all());
        $generadora->logo = $logo;$generadora->save();
        

        return redirect()->route('generadoras.index', $generadora->id)
               ->with('info', 'generadoras guardada con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Generadoras  $generadora
     * @return \Illuminate\Http\Response
     */
    public function show(Generadoras $generadora)
    {
        return view('generadoras.show', compact('generadora'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Generadoras  $generadora
     * @return \Illuminate\Http\Response
     */
    public function edit(Generadoras $generadora)
    {
        return view('generadoras.edit', compact('generadora'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Generadoras  $generadora
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Generadoras $generadora)
    {
        $this->validate($request, [
            'logo' => 'required|image|mimes:jpeg,jpg,png|max:2048',
        ]);

        $image = $request->file('logo');
        $logo = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('/public/images/generadoras/logos/'), $logo);

        $generadora->update($request->all());
        $generadora->logo = $logo;$generadora->update();

        return redirect()->route('generadoras.index', $generadora->id)
               ->with('info', 'generadoras actualizada con exito');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Generadoras  $generadora
     * @return \Illuminate\Http\Response
     */
    public function destroy(Generadoras $generadora)
    {
        $generadora->delete();

        return back()->with('info', 'Empresa eliminada correctamente');
    }
}
