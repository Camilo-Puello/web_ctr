<?php

namespace App\Http\Controllers;

use App\Empresa;
use App\User;
use Illuminate\Http\Request;
use Auth;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, User $id)
    {

        if($request){

            $user = User::findOrfail($id);
            $query = trim($request->get('search'));
            $emp_count = Empresa::count();

            $emp = Empresa::where('name', 'LIKE', '%'.$query. '%' )
                ->orderBy('id', 'asc')
                ->paginate(3);

           
            return view('empresa.index', compact('emp', 'user', 'query', 'emp_count'));
        }
        //$emp = Empresa::paginate();

        //return view('empresa.index', compact('emp'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empresa.create');
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
        $image->move(public_path('/public/images/transportadora/logos/'), $logo);
        
        $emp = Empresa::create($request->all());
        $emp->logo = $logo;$emp->save();

        return redirect()->route('empresa.edit', $emp->id)
               ->with('info', 'Empresa guardada con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function show(Empresa $empresa)
    {
        return view('empresa.show', compact('empresa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function edit(Empresa $empresa)
    {
        return view('empresa.edit', compact('empresa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empresa $empresa)
    {

        $this->validate($request, [
            'logo' => 'required|image|mimes:jpeg,jpg,png|max:2048',
        ]);

        $image = $request->file('logo');
        $logo = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('/public/images/transportadora/logos/'), $logo);
        
        $empresa->update($request->all());
        $empresa->logo = $logo;$empresa->update();

        return redirect()->route('empresa.edit', $empresa->id)
               ->with('info', 'Empresa actualizada con exito');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empresa $empresa)
    {
        $empresa->delete();

        return back()->with('info', 'eliminada correctamente');
    }
}
