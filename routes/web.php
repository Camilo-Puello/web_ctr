<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function() {
    return view('welcome');
});



Route::get('galeria', 'GaleriaController@index')->name('galeria');


Route::get('/seguridad', function () {
    return view('seguridad');
});



Route::get('/opinion', function () {
    return view('opinion');
});


Route::get('/nosotros', function () {
    return view('nosotros');
});



  //Aporte

  Route::post('aporte/store', 'AporteController@store')->name('aporte.store');


  Route::get('aporte', 'AporteController@index')->name('aporte.index');
         


  Route::get('aporte/create', 'AporteController@create')->name('aporte.create');


  Route::put('aporte/{aporte}', 'AporteController@update')->name('aporte.update');


  Route::get('aporte/{aporte}', 'AporteController@show')->name('aporte.show');


  Route::delete('aporte/{aporte}', 'AporteController@destroy')->name('aporte.destroy');


  Route::get('aporte/{aporte}/edit', 'AporteController@edit')->name('aporte.edit');


  Route::get('aporte/descarga/{aporte}', 'AporteController@descarga')->name('aporte.descarga');




Route::get('/contacto', function () {
    return view('contacto');
});


Route::get('/home/{id}', 'HomeController@show');


Auth::routes();

Route::get('/serv', 'ServController@index');

Route::get('/noti', 'NotiController@index');

Route::get('/home', 'HomeController@index');




//Test

Route::get('onlyme', function(){

return  App\ImageProfile::all();

});



Route::middleware(['auth'])->group(function (){

    //Encuestas

    Route::get('/questionnaire', 'QuestionnaireController@index')->name('questionnaire.index');

    Route::get('/questionnaire/create', 'QuestionnaireController@create')->name('questionnaire.create');

    Route::post('/questionnaire', 'QuestionnaireController@store')->name('questionnaire.store');

    Route::get('/opinion', 'QuestionnaireController@show')->name('questionnaire.show ');

    Route::get('/questionnaire/{questionnaire}/questions/create/', 'QuestionController@create');

    Route::get('/surveys/{questionnaire}-{slug}', 'SurveyController@show');

    Route::post('/surveys/{questionnaire}-{slug}', 'SurveyController@store');

    Route::post('/questionnaire/{questionnaire}/questions', 'QuestionController@store');

    Route::get('/questionnaire/{questionnaire}/edit', 'QuestionnaireController@edit')->name('questionnaire.edit');

    Route::patch('/questionnaire/{questionnaire}/update', 'QuestionnaireController@update')->name('questionnaire.update');

    Route::get('/questions/{question}/edit', 'QuestionController@edit')->name('question.edit');

    Route::patch('/questions/{question}/update', 'QuestionController@update')->name('question.update');

    Route::delete('/questionnaire/{questionnaire}/questions', 'QuestionnaireController@destroy')->name('encuestas.delete');

    Route::delete('/questionnaire/{questionnaire}/questions/{question}', 'QuestionController@destroy');

    Route::get('/questionnaire/{questionnaire}/questions', 'QuestionnaireController@question')->name('encuestas.show');

    //Perfil

    Route::get('/profile/{id}', 'imageProfileController@profile')->name('users.profile');       

    Route::get('/edit/user/', 'UserContoller@editProfile')->name('users.editProfile');

    Route::get('/search', 'UserContoller@search')->name('users.search');

    Route::get('/change/password', 'UserContoller@changePass')->name('users.changePass');

    Route::post('/update/password', 'UserContoller@updatePass')->name('users.updatePass');

    Route::post('/edit/user/', 'UserContoller@updateProfile')->name('users.updateProfile');

    Route::post('/profile/{id}', 'UserContoller@update_avatar')->name('users.update_avatar');

    //Fotos de la biografia

    Route::post('image_profile', 'imageProfileController@store')->name('image_profile');

    Route::put('image_profile', 'imageProfileController@update')->name('image_profile.update');

    //Fotos del vehículo

    Route::post('image_vehicle', 'imageVehicleController@store')->name('image_vehicle');

    Route::put('image_vehicle', 'imageVehicleController@update')->name('image_vehicle.update');

    //Noticias
    
    Route::get('/posts', 'NoticiasController@index')->name('posts.index');

    Route::get('/posts/create', 'NoticiasController@create');

    Route::get('/posts/{post}', 'NoticiasController@show');

    Route::post('/posts', 'NoticiasController@store');

    Route::get('/posts/{post}/edit', 'NoticiasController@edit');

    Route::patch('posts/{post}', 'NoticiasController@update');

    Route::delete('posts/{post}', 'NoticiasController@destroy')->name('posts.destroy');


    //Roles

    Route::post('roles/store', 'RoleContoller@store')->name('roles.store')
        ->middleware('permission:roles.create');


    Route::get('roles', 'RoleContoller@index')->name('roles.index')
        ->middleware('permission:roles.index');


    Route::get('roles/create', 'RoleContoller@create')->name('roles.create')
        ->middleware('permission:roles.create');


    Route::put('roles/{role}', 'RoleContoller@update')->name('roles.update')
        ->middleware('permission:roles.edit');


    Route::get('roles/{role}', 'RoleContoller@show')->name('roles.show')
        ->middleware('permission:roles.show');


    Route::delete('roles/{role}', 'RoleContoller@destroy')->name('roles.destroy')
        ->middleware('permission:roles.destroy');


    Route::get('roles/{role}/edit', 'RoleContoller@edit')->name('roles.edit')
        ->middleware('permission:roles.edit');


    //transportes

    Route::post('transportes/store', 'TransportesController@store')->name('transportes.store')
        ->middleware('permission:transportes.create');


    Route::get('transportes', 'TransportesController@index')->name('transportes.index')
        ->middleware('permission:transportes.index');


    Route::get('transportes/create', 'TransportesController@create')->name('transportes.create')
        ->middleware('permission:transportes.create');


    Route::put('transportes/{transporte}', 'TransportesController@update')->name('transportes.update')
        ->middleware('permission:transportes.edit');


    Route::get('transportes/{transporte}', 'TransportesController@show')->name('transportes.show')
        ->middleware('permission:transportes.show');


    Route::delete('transportes/{transporte}', 'TransportesController@destroy')->name('transportes.destroy')
        ->middleware('permission:transportes.destroy');


    Route::get('transportes/{transporte}/edit', 'TransportesController@edit')->name('transportes.edit')
        ->middleware('permission:transportes.edit');


    
     //Servicios

     Route::post('servicios/store', 'ServiciosController@store')->name('servicios.store')
     ->middleware('permission:servicios.create');


 Route::get('servicios', 'ServiciosController@index')->name('servicios.index')
     ->middleware('permission:servicios.index');


 Route::get('servicios/create', 'ServiciosController@create')->name('servicios.create')
     ->middleware('permission:servicios.create');    


 Route::put('servicios/{servicio}', 'ServiciosController@update')->name('servicios.update')
     ->middleware('permission:servicios.edit');


 Route::get('servicios/{servicio}', 'ServiciosController@show')->name('servicios.show')
     ->middleware('permission:servicios.show');


 Route::delete('servicios/{servicio}', 'ServiciosController@destroy')->name('servicios.destroy')
     ->middleware('permission:servicio.destroy');


 Route::get('servicios/{servicio}/edit', 'ServiciosController@edit')->name('servicios.edit')
     ->middleware('permission:servicios.edit');



 //Usuarios


   Route::post('users/store', 'UserContoller@store')->name('users.store')
        ->middleware('permission:users.create');

   Route::get('users', 'UserContoller@index')->name('users.index')
       ->middleware('permission:users.index');


    Route::get('users/create', 'UserContoller@create')->name('users.create')
       ->middleware('permission:users.create');


   Route::put('users/{user}', 'UserContoller@update')->name('users.update')
       ->middleware('permission:users.edit');


   Route::get('users/{user}', 'UserContoller@show')->name('users.show')
       ->middleware('permission:users.show');


   Route::delete('users/{user}', 'UserContoller@destroy')->name('users.destroy')
       ->middleware('permission:users.destroy');


   Route::get('users/{user}/edit', 'UserContoller@edit')->name('users.edit')
     ->middleware('permission:users.edit');

   Route::post('users/guardar_imagen', 'UserContoller@guardar_imagen')->name('users.guardar_imagen')
     ->middleware('permission:users.guardar_imagen');



//Propietarios

    Route::post('propietarios/store', 'PropietariosController@store')->name('propietarios.store')
        ->middleware('permission:propietarios.create');


    Route::get('propietarios', 'PropietariosController@index')->name('propietarios.index')
        ->middleware('permission:propietarios.index');


    Route::get('propietarios/create', 'PropietariosController@create')->name('propietarios.create')
        ->middleware('permission:propietarios.create');


    Route::put('propietarios/{propietario}', 'PropietariosController@update')->name('propietarios.update')
        ->middleware('permission:propietarios.edit');


    Route::get('propietarios/{propietario}', 'PropietariosController@show')->name('propietarios.show')
        ->middleware('permission:propietarios.show');


    Route::delete('propietarios/{propietario}', 'PropietariosController@destroy')->name('propietarios.destroy')
        ->middleware('permission:propietarios.destroy');


    Route::get('propietarios/{propietario}/edit', 'PropietariosController@edit')->name('propietarios.edit')
        ->middleware('permission:propietarios.edit');



    //Generadoras

    Route::post('generadoras/store', 'GeneradorasController@store')->name('generadoras.store')
        ->middleware('permission:generadoras.create');


    Route::get('generadoras', 'GeneradorasController@index')->name('generadoras.index')
        ->middleware('permission:generadoras.index');


    Route::get('generadoras/create', 'GeneradorasController@create')->name('generadoras.create')
        ->middleware('permission:generadoras.create');


    Route::put('generadoras/{generadora}', 'GeneradorasController@update')->name('generadoras.update')
        ->middleware('permission:generadoras.edit');


    Route::get('generadoras/{generadora}', 'GeneradorasController@show')->name('generadoras.show')
        ->middleware('permission:generadoras.show');


    Route::delete('generadoras/{generadora}', 'GeneradorasController@destroy')->name('generadoras.destroy')
        ->middleware('permission:generadoras.destroy');


    Route::get('generadoras/{generadora}/edit', 'GeneradorasController@edit')->name('generadoras.edit')
        ->middleware('permission:generadoras.edit');



    //Transportadoras

    Route::post('empresa/store', 'EmpresaController@store')->name('empresa.store')
        ->middleware('permission:empresa.create');


    Route::get('empresa', 'EmpresaController@index')->name('empresa.index')
        ->middleware('permission:empresa.index');


    Route::get('empresa/create', 'EmpresaController@create')->name('empresa.create')
        ->middleware('permission:aporte.create');


    Route::put('empresa/{empresa}', 'EmpresaController@update')->name('empresa.update')
        ->middleware('permission:empresa.edit');


    Route::get('empresa/{empresa}', 'EmpresaController@show')->name('empresa.show')
        ->middleware('permission:empresa.show');


    Route::delete('empresa/{empresa}', 'EmpresaController@destroy')->name('empresa.destroy')
        ->middleware('permission:empresa.destroy');


    Route::get('empresa/{empresa}/edit', 'EmpresaController@edit')->name('empresa.edit')
        ->middleware('permission:empresa.edit');



    //subir archivos

Route::post('subirArchivo/store', 'SubirArchivoController@store')->name('subirArchivo.store')
       ->middleware('permission:subirArchivo.create');

Route::get('subirArchivo', 'SubirArchivoController@index')->name('subirArchivo.index')
        ->middleware('permission:subirArchivo.index');

Route::get('subirArchivo/create', 'SubirArchivoController@create')->name('subirArchivo.create')
        ->middleware('permission:subirArchivo.create');

Route::put('subirArchivo/{subir}', 'SubirArchivoController@update')->name('subirArchivo.update')
       ->middleware('permission:subirArchivo.edit');

Route::get('subirArchivo/{subir}', 'SubirArchivoController@show')->name('subirArchivo.show')
       ->middleware('permission:subirArchivo.show');

Route::delete('subirArchivo/{subir}', 'SubirArchivoController@destroy')->name('subirArchivo.destroy')
       ->middleware('permission:subirArchivo.destroy');

Route::get('subirArchivo/{subir}/edit', 'SubirArchivoController@edit')->name('subirArchivo.edit')
       ->middleware('permission:subirArchivo.edit');





//Elegir lider

Route::post('lider/store', 'LiderController@store')->name('lider.store')
->middleware('permission:lider.create');


Route::get('lider', 'LiderController@index')->name('lider.index')
->middleware('permission:lider.index');

Route::get('lider/consulta', 'LiderController@consulta')->name('lider.consulta')
->middleware('permission:lider.consulta');


Route::get('lider/create', 'LiderController@create')->name('lider.create')
->middleware('permission:lider.create');


Route::put('lider/{lider}', 'LiderController@update')->name('lider.update')
->middleware('permission:lider.edit');


Route::get('lider/{lider}', 'LiderController@show')->name('lider.show')
->middleware('permission:lider.show');


Route::delete('lider/{lider}', 'LiderController@destroy')->name('lider.destroy')
->middleware('permission:lider.destroy');


Route::get('lider/{lider}/edit', 'LiderController@edit')->name('lider.edit')
->middleware('permission:lider.edit');






   





});
