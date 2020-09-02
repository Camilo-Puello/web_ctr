<?php

namespace App\Http\Controllers;

use App\User;
use Caffeinated\Shinobi\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Auth;
use Image;



class UserContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function profile($id, Request $request){

        $user = User::find($id);
        
        

        if($user ){
            return view('users.profile')->withUser($user);
            
            
        }             
        
        else {
            return redirect()->back();
            
        }
       

    }

    public function search(Request $request){

        $data = User::all();

        return response()->json($data);

    }


    public function update_avatar(Request $request){

        $user = User::find(Auth::user()->id);

        $validate = $request->validate([

            'avatar'=>'required|image'

        ]);

        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename) );

            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }

        return redirect()->back();

    }

    public function editProfile(){

        if(Auth::user()){
            $user = User::find(Auth::user()->id);

            if ($user){
                return view('users.editProfile')->withUser($user);
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }

    }

    public function updateProfile(Request $request){

        $user = User::find(Auth::user()->id);

        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Su contraseña actual no coincide con la contraseña que proporcionó. Inténtalo de nuevo.");
        }

        if($user){

            $validate = null;

            if(Auth::user()->email === $request['email']){

                $validate = $request->validate([

                    'name'=>'required|min:2',
                    'email'=>'required|email'
    
                ]);

            } else {

                $validate = $request->validate([

                    'name'=>'required|min:2',
                    'email'=>'required|email|unique:users'
    
                ]);

            }

            if($validate){
                $user->name = $request['name'];
                $user->email = $request['email'];

                $request->session()->flash('¡Perfecto!', 'Tus datos se han actualizado.');
                $user->save();
                return redirect()->back();
            } else {
                return redirect()->back();
            }

        } else {
            return redirect()->back();
        }

    }

    public function changePass(Request $request){
        if(Auth::user()){
            $user = User::find(Auth::user()->id);

            if ($user){
                return view('users.updatePass')->withUser($user);
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
    }

    public function updatePass(Request $request){

        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Su contraseña actual no coincide con la contraseña que proporcionó. Inténtalo de nuevo.");
        }

        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","La nueva contraseña no puede ser la misma que su contraseña actual. Por favor, elija una contraseña diferente.");
        }

        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:6|confirmed',
        ]);

        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();

        return redirect()->back()->with("success","Contraseña cambiada con éxito !");
    }
 

    public function index(Request $request)       
    
{
      

        if($request){   
           
            $query = trim($request->get('search')); 
            
            $users_count = User::count();

            $users = User::where('name', 'LIKE', '%'.$query. '%' )                
                ->orderBy('id', 'asc')                                                       
                ->paginate(10);            
              

            
            return view('users.index', compact('users', 'query', 'users_count'));
           
        }

        //$users = User::paginate();

        //return view('users.index', compact('users'));
    }


     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();

        return view('users.create', ['roles'=>$roles] );
        //return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = $request->all();

        if($img = $request->file('imagen')){
            $path = $img->getClientOriginalName();
            $img->move('image', $path);
            $user['imagen'] = $path;

        }

        User::create($user);

        return redirect()->route('users.create')
            ->with('info', 'Usuario creado con exito');




    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)

    {
        
      
        return view('users.show', compact('user'));
       
      
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $roles = Role::get();

        return view('users.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //actualizar usuario
        $user = User::find($id);
        //actualizar roles
        $user->fill($request->all())->save();

        if($img = $request->file('imagen')){
            $path = $img->getClientOriginalName();
            $img->move('image', $path);
            $user['imagen'] = $path;

        }

        $user->roles()->sync($request->get('roles'));


        return redirect()->route('users.edit', $user->id)
               ->with('info', 'Usuario actualizado con exito');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return back()->with('info', 'usuario eliminado correctamente');
    }


      /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar_imagen(Request $request)
    {
        if($foto = User::setImagen($request->imagen))
        $request->request->add(['foto'=> $foto]);



    }


}

