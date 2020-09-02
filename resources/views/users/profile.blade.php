<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Comunidad Camionera de Colombia</title>
    <link rel="icon" href="/img/favicon.png">
    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet'
        type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css">

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

    <link rel="stylesheet" href="/css/style.css">

  



    <style>
        body {
            font-weight: 200;
            margin: 0;
            font-family: 'Nunito', sans-serif;
        }

        .fa-btn {
            margin-right: 6px;
        }

        .columna {
            width: 33%;
            float: left;
        }

        @media (max-width: 500px) {

            .columna {
                width: auto;
                float: none;
            }

        }

        
    </style>
</head>

<body id="app-layout" >
    <nav class="navbar navbar-default" style=" width: 100%; margin: 0; background-color: #f6a515;">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/home') }}" style="color: #6345fe; font-weight: bold;">
                    Inicio
                </a>
              
            </div>



            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                 <!-- Left Side Of Navbar -->
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-left">
                    <li style="margin-left: 70%;">
                         <!--buscador-->      
                          <input style="font-size: 12px; width:400px; position: relative; margin-top: 2%;" class="form-control" type="text" name="buscar" id="buscar" placeholder="Buscar..."
                              aria-label="Search">        
                              <ul class="list-group" id="result" style="position:absolute; z-index: 1;"></ul>

                    </li>

                </ul>
                <ul class="nav navbar-nav navbar-right">
               
                    <!-- Authentication Links -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"
                            style="position:relative; padding-left:50px; color: #6345fe; font-weight: bold;">
                            <img src="/uploads/avatars/{{ Auth::user()->avatar}}"
                                style="width:32px; height:32px; position:absolute; top:10px; left:10px; border-radius:50%; "
                                alt="avatar-user">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="<?=route('users.profile', Auth::user()->id); ?>"><i
                                        class="fa fa-btn fa-user"></i><?php echo e(__('Perfil')); ?></a></li>
                            
                            <li><a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();"><i
                                        class="fa fa-btn fa-sign-out"></i>
                                    <?php echo e(__('Cerrar sesión')); ?>

                                </a>

                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST"
                                    style="display: none;">
                                    <?php echo csrf_field(); ?>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

 


    <!--imagen de perfil-->
    <div class="container">
        <div class="row" style="margin-top: 8%;">
            <div class="col-md-2" >

            </div>

            <div class="col-md-3" style="border: 1px solid #fff;" >
           
            
            <img src="/uploads/avatars/{{$user->avatar}}" id="overlayone-radius" style="width:150px !important; height:150px !important; float:left; border-radius:50%; margin-right:25px;"
                    alt="avatar-user" >  
                    
                    
            

                @if (request()->route()->parameters['id'] == Auth::user()->id)
                               
                    <div class="col-md-12" >
                        <svg data-toggle="modal" data-target="#imageProfile" width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-camera-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="margin-right: 8%;">
                            <path d="M10.5 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                            <path fill-rule="evenodd" d="M2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2zm.5 2a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm9 2.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0z" />
                        </svg><p style="margin-left: -10px;">Actualizar</p>
               
                    </div>            
                @endif

            <div class="modal fade" id="imageProfile" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                               <div class="col-md-10">
                                    <h3 style="text-align:center; margin-left: 80px;" class="modal-title">Actualizar foto de perfil</h3>

                                </div>
                                <div class="col-md-2">
                                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                         <span aria-hidden="true">&times;</span>
                                     </button>

                                </div>                      
                                
                            </div>
                            <!--caja actualizar imagen perfil-->
                            <div class="modal-body">

                                @include('includes.errors')

                                <form action="users.update_avatar" enctype="multipart/form-data" method="POST">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-2 col-md-offset-2">
                                                <div style="width: 200px; height: 200px;">
                                                    <div class="panel-heading" style="margin-right: 20px;">
                                                        <img src="/img/avatar.png"
                                                            class=""  id="category-img-tag"
                                                             style="border-radius:50% ; width:150px !important; height:150px !important; margin: auto;" />
                                                        <!--for preview purpose -->
                                                    </div>
                                                    <div style="background-color: #2499e3; width: 170px; height: 40px; position: relative; border-radius: 5px; box-shadow: 0px 3px 0px #1a71a9; padding-top: 10px;">
                                                        <div class="col-md-3">
                                                             <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cloud-arrow-up-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg"  style="text-align: center; color: #fff; font-size: 27px;">
                                                             <path fill-rule="evenodd" d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2zm2.354 5.146l-2-2a.5.5 0 0 0-.708 0l-2 2a.5.5 0 1 0 .708.708L7.5 6.707V10.5a.5.5 0 0 0 1 0V6.707l1.146 1.147a.5.5 0 0 0 .708-.708z"/>
                                                             </svg>
                                                        </div>
                                                        <div class="col-md-9" style=" width: auto;">
                                                            <p style="text-align: center; color: #fff; ">
                                                              Subir Imagen</p>

                                                        </div>
                                                       
                                                    <input style="position: absolute; top: 0px; left: 0px; right: 0px; bottom: 0px; width: 100%; height: 100%; opacity: 0; " type="file" name="avatar"
                                                        id="avatar">

                                                    </div>
                                                  
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div style="text-align:center; margin-top: 50px; margin-left: 20px;"><input type="submit" value="Cambiar"
                                            class="btn btn-sm btn-light">
                                            
                                            </div>

                                </form>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
                            </div>
                        </div>
                    </div>
                </div>

           

               
               

            </div>

            <div class="col-md-7">
                <div class="col-md-6">
                
                <h3 style="margin-left: 25px;">{{ $user->name }}</h3>
                
                </div>

                <div class="col-md-3" style="padding: 10px;">
                      <div class="col-md-6">
                          @if (request()->route()->parameters['id'] == Auth::user()->id)
                          <a class="btn btn-primary" href="<?=route('users.editProfile'); ?>" role="button">Editar</a>
                          @endif       
                      </div>

                      <div class="col-md-6">
                        @if (request()->route()->parameters['id'] == Auth::user()->id)
                          <a href="<?=route('users.changePass', Auth::user()->id); ?>"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-gear-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="font-size: 28px;">
                          <path fill-rule="evenodd" d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 0 0-5.86 2.929 2.929 0 0 0 0 5.858z"/>
                          </svg></a> 
                        @endif     
                      </div>              

                </div>
                <div class="col-md-3">

                </div>
                <div class="col-md-12">
                    <div class="col-md-4">                   
                     <button type="button" class="btn btn-light">
                         <span class="badge badge-light">{{ $p_count}}</span>
                        Fotos Usuarios 
                     </button>
                    </div>


                    <div class="col-md-4">
                       <button type="button" class="btn btn-light">
                           @if ($v_count == 1)
                               <span class="badge badge-light">3</span>
                           @else
                                <span class="badge badge-light">0</span>
                           @endif
                           
                        Fotos Vehiculo 
                        </button>       
                    </div>

                    <div class="col-md-4">

                    </div>
               

                </div>
            </div>
            
        </div>
    </div>
   

    <div id="app" style="margin-top: 5%;">
        <div class="container">
            <div class="row">
                
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="row">
                            <div class="col-md-10">
                            <h2 style="text-align:center; margin-left: 70px;">Fotos de usuario</h2>

                            </div>
                            @if (request()->route()->parameters['id'] == Auth::user()->id)
                            <div class="col-md-2" style=" padding: 15px;">                           
                              <div style="text-align:center; ">
                                   <button type="button" class="btn btn-primary" data-toggle="modal"
                                       data-target="#exampleModalCenter">
                                       <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-camera" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="font-size: 22px;">
                                          <path fill-rule="evenodd" d="M15 12V6a1 1 0 0 0-1-1h-1.172a3 3 0 0 1-2.12-.879l-.83-.828A1 1 0 0 0 9.173 3H6.828a1 1 0 0 0-.707.293l-.828.828A3 3 0 0 1 3.172 5H2a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1zM2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2z"/>
                                          <path fill-rule="evenodd" d="M8 11a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm0 1a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                          <path d="M3 6.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
                                        </svg>
                                   
                              </div>
                            </div>
                            @endif

                            </div>
                        
                        </div>
                        <div class="panel-body" style="padding-left: 8%; padding-bottom: 8%; padding-top: 8%;">

                            @if (count($images) > 0)
                            <!--Subir imagenes de usuario a la vista-->
                            @foreach ($images as $files)
                            <div class="row" style="float: left;">
                                <div class="col-md-12" >                                    
                                    <div style=" float: left; margin-left: 10px; margin-top: 10px; width:200px; height:180px" >
                                    <img src="{{ asset('/public/images/profile/'.$files['frontal']) }}"
                                       style="max-width: 100%; height: 100%; margin: auto;">


                                        @if (request()->route()->parameters['id'] == Auth::user()->id)
                                           <div style="text-align:center;" class="overlayinn">
                                            <svg width="1em" data-toggle="modal" data-target="#exampleModalCenterUpdate" height="1em" viewBox="0 0 16 16" class="bi bi-images" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="font-size: 40px; text-align: center; margin-top:25%; margin-left: 35%;">
                                                <path fill-rule="evenodd" d="M12.002 4h-10a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1zm-10-1a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2h-10z"/>
                                                <path d="M10.648 8.646a.5.5 0 0 1 .577-.093l1.777 1.947V14h-12v-1l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71z"/>
                                                <path fill-rule="evenodd" d="M4.502 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zM4 2h10a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1v1a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2h1a1 1 0 0 1 1-1z"/>
                                            </svg>
                                            </div>
                                        @endif
                                    </div>
                                   
                                </div>
                                
                            </div>
                            @endforeach 
                            <!--paginacion-->
                            <div class="col-md-12">
                                {{$images->links()}}
                            </div>

                          
                            @else
                         
                           

                            <!-- mensaje cuando no hay imagenes -->
                            <h3 style="text-align:center; color:#C3C3C3;">Aún no se han añadido fotos</h3>

                           
                            @endif

                            <!-- caja de crear foto usuario -->
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <div class="col-md-11">
                                                <p style="font-size: 20px; font-weight: bold; color: #000; text-align: center;">Montar imagenes</p>

                                            </div>
                                            <div class="col-md-1">
                                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                     <span aria-hidden="true">&times;</span>
                                                 </button>

                                            </div>
                                           
                                        </div>
                                        <div class="modal-body" >

                                            <form enctype="multipart/form-data" action="/image_profile" method="POST">
                                                @csrf
                                               
                                                <div class="row">

                                                        <div class="col-md-12" style="margin-right: 20px;">
                                                            <img src="/img/avatar.png" class=""  id="crear-foto-usu"
                                                             style="border-radius:50% ; width:150px !important; height:150px !important; margin: auto;" />
                                                             <!--for preview purpose -->
                                                        </div>

                                                        
                                                            <div class="col-md-4">

                                                            </div>

                                                            <div class="col-md-4" >
                                                                  <div style="background-color: #2499e3; width: 170px; height: 40px; position: relative; border-radius: 5px; box-shadow: 0px 3px 0px #1a71a9; padding-top: 10px;">
                                                                      <div class="col-md-3">
                                                                         <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cloud-arrow-up-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg"  style="text-align: center; color: #fff; font-size: 27px;">
                                                                            <path fill-rule="evenodd" d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2zm2.354 5.146l-2-2a.5.5 0 0 0-.708 0l-2 2a.5.5 0 1 0 .708.708L7.5 6.707V10.5a.5.5 0 0 0 1 0V6.707l1.146 1.147a.5.5 0 0 0 .708-.708z"/>
                                                                         </svg>
                                                                      </div>
                                                                      <div class="col-md-10" style=" width: auto;">
                                                                         <p style="text-align: center; color: #fff; ">Subir Imagen</p>
      
                                                                      </div>
                                                             
                                                                      <input style="position: absolute; top: 0px; left: 0px; right: 0px; bottom: 0px; width: 100%; height: 100%; opacity: 0; " type="file" name="frontal"
                                                                      id="crear">                                                             
      
                                                                  </div>

                                                            </div>

                                                            <div class="col-md-4">                                                              

                                                            </div>                                                       

                                                        

                                                       
                                                        <div class="col-md-12">
                                                            <input type="submit" value="Añadir" class="btn btn-sm btn-success" style="float:right; margin-top: -35px;">
                                                        </div>    <!--for preview purpose -->                                                                                                  
                                                    
                                                </div>                                                                   

                                            </form>

                                            
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Cancelar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <!-- caja actualizar fotos usuarios -->
                            <div class="modal fade" id="exampleModalCenterUpdate" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalCenterUpdateTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                              <div class="col-md-11">
                                              <p style="text-align:center; font-size: 20px; font-weight: bold; color: #000;">Actualizar fotos</p>

                                              </div>

                                              <div class="col-md-1">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                     <span aria-hidden="true">&times;</span>
                                                </button>

                                              </div>
                                            
                                           
                                        </div>
                                        <div class="modal-body">
                                            <form enctype="multipart/form-data"
                                                action="{{route('image_profile.update')}}" method="POST">
                                                @csrf
                                                @method('PUT')

                                               
                                                <div class="row">

                                                    <div class="col-md-12" style="margin-right: 20px;">
                                                        <img src="/img/avatar.png"
                                                        class=""  id="actu-foto-usu"
                                                         style="border-radius:50% ; width:150px !important; height:150px !important; margin: auto;" />
                                                         <!--for preview purpose -->
                                                    </div>
                                                    
                                                    <div class="col-md-12">
                                                        <div class="col-md-4">
                                                    
                                                        </div>
                                                    
                                                        <div class="col-md-4" >
                                                              <div style="background-color: #2499e3; width: 170px; height: 40px; position: relative; border-radius: 5px; box-shadow: 0px 3px 0px #1a71a9; padding-top: 10px;">
                                                                  <div class="col-md-3">
                                                                     <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cloud-arrow-up-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg"  style="text-align: center; color: #fff; font-size: 27px;">
                                                                        <path fill-rule="evenodd" d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2zm2.354 5.146l-2-2a.5.5 0 0 0-.708 0l-2 2a.5.5 0 1 0 .708.708L7.5 6.707V10.5a.5.5 0 0 0 1 0V6.707l1.146 1.147a.5.5 0 0 0 .708-.708z"/>
                                                                     </svg>
                                                                  </div>
                                                                  <div class="col-md-10" style=" width: auto;">
                                                                     <p style="text-align: center; color: #fff; ">Subir Imagen</p>
                                                    
                                                                  </div>
                                                         
                                                                  <input style="position: absolute; top: 0px; left: 0px; right: 0px; bottom: 0px; width: 100%; height: 100%; opacity: 0; " type="file" name="frontal"
                                                                  id="actualizar">                                                             
                                                    
                                                              </div>
                                                    
                                                        </div>
                                                    
                                                        <div class="col-md-4">      
                                                    
                                                         
                                                    
                                                        </div>                                                       
                                                    
                                                    </div>
                                                    
                                                    
                                                    <div class="col-md-12">
                                                        <input type="submit" value="Añadir" class="btn btn-sm btn-success" style="float:right; margin-top: -35px;">
                                                    </div>    <!--for preview purpose -->                                                                                                  
                                                    
                                                    </div>

                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Cancelar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!--vista fotos de vehiculo-->

    <div id="app">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2 style="text-align:center;">Fotos de vehículo</h2>
                        </div>
                        <div class="panel-body">

                            @if (count($vehicles) > 0)
                            <div class="columna">
                                <div class="panel panel-default" >
                                    <div class="panel-heading">
                                        <h4 style="text-align:center;">Lateral izquierdo</h4>
                                    </div>
                                    <div style="padding: 7px;">
                                    <img src="{{ asset('/public/images/vehicle/'.$vehicles->first()->lateral_izq) }}"
                                        style="width:200px; height:180px; margin: auto;">

                                    </div>
                                   
                                </div>
                            </div>

                            <div class="columna">
                                <div class="panel panel-default" style="margin-left:7px ;">
                                    <div class="panel-heading">
                                        <h4 style="text-align:center;">Frontal</h4>
                                    </div>
                                    <div style="padding: 7px;">
                                    <img src="{{ asset('/public/images/vehicle/'.$vehicles->first()->frontal) }}"
                                        style="width:200px; height:180px; margin: auto;">

                                    </div>
                                  
                                </div>
                            </div>

                            <div class="columna">
                                <div class="panel panel-default" style="margin-left:7px ;">
                                    <div class="panel-heading">
                                        <h4 style="text-align:center;">Lateral derecho</h4>
                                    </div>
                                    <div style="padding: 7px;">
                                    <img src="{{ asset('/public/images/vehicle/'.$vehicles->first()->lateral_der) }}"
                                        style="width:200px; height:180px; margin: auto;">

                                    </div>
                                    
                                </div>
                            </div>

                            @if (request()->route()->parameters['id'] == Auth::user()->id)
                            <div style="text-align:center;">
                                <button type="button" class="btn btn-success" data-toggle="modal"
                                    data-target="#vehicleCenterUpdate">Actualizar</button>
                            </div>
                            @endif
                            @else

                            <!-- Button trigger modal -->
                            <h3 style="text-align:center; color:#C3C3C3;">Aún no se han añadido fotos</h3>

                            @if (request()->route()->parameters['id'] == Auth::user()->id)
                            <div style="text-align:center;">
                                <button type="button" class="btn btn-success" data-toggle="modal"
                                    data-target="#modalVehicle">
                                    Añadir
                                </button></div>

                            @endif
                            @endif

                            <!-- Subir fotos de vehiculo -->
                            <div class="modal fade" id="modalVehicle" tabindex="-1" role="dialog"
                                aria-labelledby="modalVehicleTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <div class="col-md-11">
                                               <p style="text-align:center; font-size: 20px; font-weight: bold; color: #000;">Fotos de vehículo</p>

                                            </div>

                                            <div class="col-md-1">
                                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                 </button>

                                            </div>
                                            
                                            
                                        </div>
                                        <div class="modal-body">
                                            <form enctype="multipart/form-data" action="/image_vehicle" method="POST">
                                                @csrf

                                                <!--lateral iazquierdo-->

                                                <div class="columna">                                                    
                                                    <div class="col-md-12" style="margin-right: 20px;">
                                                        <img src="/img/avatar.png"
                                                        class=""  id="actualizar_iz"
                                                         style="border-radius:50% ; width:150px !important; height:150px !important; margin: auto;" />
                                                         <!--for preview purpose -->
                                                    </div>

                                                    <div class="col-md-12">

                                                    <div style="background-color: #2499e3; width: 170px; height: 40px; position: relative; border-radius: 5px; box-shadow: 0px 3px 0px #1a71a9; padding-top: 10px;">
                                                                  <div class="col-md-3">
                                                                     <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cloud-arrow-up-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg"  style="text-align: center; color: #fff; font-size: 27px;">
                                                                        <path fill-rule="evenodd" d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2zm2.354 5.146l-2-2a.5.5 0 0 0-.708 0l-2 2a.5.5 0 1 0 .708.708L7.5 6.707V10.5a.5.5 0 0 0 1 0V6.707l1.146 1.147a.5.5 0 0 0 .708-.708z"/>
                                                                     </svg>
                                                                  </div>
                                                                  <div class="col-md-10" style=" width: auto;">
                                                                     <p style="text-align: center; color: #fff; ">Subir Imagen</p>
                                                    
                                                                  </div>
                                                         
                                                                  <input style="position: absolute; top: 0px; left: 0px; right: 0px; bottom: 0px; width: 100%; height: 100%; opacity: 0; " type="file" name="lateral_izq"
                                                                  id="iz_actualizado">                                                             
                                                    
                                                    </div>

                                                    </div>
                                                    </div>


                                               
                                                
                                                
                                                <!--frontal-->                                          

                                                <div class="columna">                                                    
                                                    <div class="col-md-12" style="margin-right: 20px;">
                                                        <img src="/img/avatar.png"
                                                        class=""  id="actualizar_fr"
                                                         style="border-radius:50% ; width:150px !important; height:150px !important; margin: auto;" />
                                                         <!--for preview purpose -->
                                                    </div>

                                                    <div class="col-md-12">

                                                    <div style="background-color: #2499e3; width: 170px; height: 40px; position: relative; border-radius: 5px; box-shadow: 0px 3px 0px #1a71a9; padding-top: 10px;">
                                                                  <div class="col-md-3">
                                                                     <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cloud-arrow-up-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg"  style="text-align: center; color: #fff; font-size: 27px;">
                                                                        <path fill-rule="evenodd" d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2zm2.354 5.146l-2-2a.5.5 0 0 0-.708 0l-2 2a.5.5 0 1 0 .708.708L7.5 6.707V10.5a.5.5 0 0 0 1 0V6.707l1.146 1.147a.5.5 0 0 0 .708-.708z"/>
                                                                     </svg>
                                                                  </div>
                                                                  <div class="col-md-10" style=" width: auto;">
                                                                     <p style="text-align: center; color: #fff; ">Subir Imagen</p>
                                                    
                                                                  </div>
                                                         
                                                                  <input style="position: absolute; top: 0px; left: 0px; right: 0px; bottom: 0px; width: 100%; height: 100%; opacity: 0; " type="file" name="frontal"
                                                                  id="fr_actualizado">                                                             
                                                    
                                                    </div>

                                                    </div>
                                                </div>


                                               
                                                
                                                <!--lateral derecho-->                                               
                                                <div class="columna">                                                    
                                                    <div class="col-md-12" style="margin-right: 20px;">
                                                        <img src="/img/avatar.png"
                                                        class=""  id="actualizar_de"
                                                         style="border-radius:50% ; width:150px !important; height:150px !important; margin: auto;" />
                                                         <!--for preview purpose -->
                                                    </div>

                                                    <div class="col-md-12">

                                                    <div style="background-color: #2499e3; width: 170px; height: 40px; position: relative; border-radius: 5px; box-shadow: 0px 3px 0px #1a71a9; padding-top: 10px;">
                                                                  <div class="col-md-3">
                                                                     <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cloud-arrow-up-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg"  style="text-align: center; color: #fff; font-size: 27px;">
                                                                        <path fill-rule="evenodd" d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2zm2.354 5.146l-2-2a.5.5 0 0 0-.708 0l-2 2a.5.5 0 1 0 .708.708L7.5 6.707V10.5a.5.5 0 0 0 1 0V6.707l1.146 1.147a.5.5 0 0 0 .708-.708z"/>
                                                                     </svg>
                                                                  </div>
                                                                  <div class="col-md-10" style=" width: auto;">
                                                                     <p style="text-align: center; color: #fff; ">Subir Imagen</p>
                                                    
                                                                  </div>
                                                         
                                                                  <input style="position: absolute; top: 0px; left: 0px; right: 0px; bottom: 0px; width: 100%; height: 100%; opacity: 0; " type="file" name="lateral_der"
                                                                  id="de_actualizado">                                                             
                                                    
                                                    </div>

                                                    </div>


                                                    <div class="col-md-12" style="margin-top: 5%; left: 60%;">

                                                    <input type="submit" value="Añadir" class="btn btn-sm btn-success">

                                                    </div>



                                                </div>
                                               

                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Cancelar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <!-- caja actualizar fotos de vehiculo -->
                            <div class="modal fade" id="vehicleCenterUpdate" tabindex="-1" role="dialog"
                                aria-labelledby="vehicleCenterUpdateTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <div class="col-md-11">
                                            <p style="text-align:center; font-size: 20px; font-weight: bold; color: #000;">Actualizar fotos e vehiculo</p>

                                            </div>
                                            <div class="col-md-1">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>

                                            </div>
                                           
                                           
                                        </div>
                                        <div class="modal-body">
                                            <form enctype="multipart/form-data"
                                                action="{{route('image_vehicle.update')}}" method="POST">
                                                @csrf
                                                @method('PUT')

                                                <!--lateral iazquierdo-->

                                                <div class="columna">                                                    
                                                    <div class="col-md-12" style="margin-right: 20px;">
                                                        <img src="/img/avatar.png"
                                                        class=""  id="actualizar_i"
                                                         style="border-radius:50% ; width:150px !important; height:150px !important; margin: auto;" />
                                                         <!--for preview purpose -->
                                                    </div>

                                                    <div class="col-md-12">

                                                    <div style="background-color: #2499e3; width: 170px; height: 40px; position: relative; border-radius: 5px; box-shadow: 0px 3px 0px #1a71a9; padding-top: 10px;">
                                                                  <div class="col-md-3">
                                                                     <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cloud-arrow-up-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg"  style="text-align: center; color: #fff; font-size: 27px;">
                                                                        <path fill-rule="evenodd" d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2zm2.354 5.146l-2-2a.5.5 0 0 0-.708 0l-2 2a.5.5 0 1 0 .708.708L7.5 6.707V10.5a.5.5 0 0 0 1 0V6.707l1.146 1.147a.5.5 0 0 0 .708-.708z"/>
                                                                     </svg>
                                                                  </div>
                                                                  <div class="col-md-10" style=" width: auto;">
                                                                     <p style="text-align: center; color: #fff; ">Subir Imagen</p>
                                                    
                                                                  </div>
                                                         
                                                                  <input style="position: absolute; top: 0px; left: 0px; right: 0px; bottom: 0px; width: 100%; height: 100%; opacity: 0; " type="file" name="lateral_izq"
                                                                  id="i_actualizado">                                                             
                                                    
                                                    </div>

                                                    </div>
                                                    </div>


                                               
                                                
                                                
                                                <!--frontal-->                                          

                                                <div class="columna">                                                    
                                                    <div class="col-md-12" style="margin-right: 20px;">
                                                        <img src="/img/avatar.png"
                                                        class=""  id="actualizar_f"
                                                         style="border-radius:50% ; width:150px !important; height:150px !important; margin: auto;" />
                                                         <!--for preview purpose -->
                                                    </div>

                                                    <div class="col-md-12">

                                                    <div style="background-color: #2499e3; width: 170px; height: 40px; position: relative; border-radius: 5px; box-shadow: 0px 3px 0px #1a71a9; padding-top: 10px;">
                                                                  <div class="col-md-3">
                                                                     <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cloud-arrow-up-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg"  style="text-align: center; color: #fff; font-size: 27px;">
                                                                        <path fill-rule="evenodd" d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2zm2.354 5.146l-2-2a.5.5 0 0 0-.708 0l-2 2a.5.5 0 1 0 .708.708L7.5 6.707V10.5a.5.5 0 0 0 1 0V6.707l1.146 1.147a.5.5 0 0 0 .708-.708z"/>
                                                                     </svg>
                                                                  </div>
                                                                  <div class="col-md-10" style=" width: auto;">
                                                                     <p style="text-align: center; color: #fff; ">Subir Imagen</p>
                                                    
                                                                  </div>
                                                         
                                                                  <input style="position: absolute; top: 0px; left: 0px; right: 0px; bottom: 0px; width: 100%; height: 100%; opacity: 0; " type="file" name="frontal"
                                                                  id="f_actualizado">                                                             
                                                    
                                                    </div>

                                                    </div>
                                                </div>


                                               
                                                
                                                <!--lateral derecho-->                                               
                                                <div class="columna">                                                    
                                                    <div class="col-md-12" style="margin-right: 20px;">
                                                        <img src="/img/avatar.png"
                                                        class=""  id="actualizar_d"
                                                         style="border-radius:50% ; width:150px !important; height:150px !important; margin: auto;" />
                                                         <!--for preview purpose -->
                                                    </div>

                                                    <div class="col-md-12">

                                                    <div style="background-color: #2499e3; width: 170px; height: 40px; position: relative; border-radius: 5px; box-shadow: 0px 3px 0px #1a71a9; padding-top: 10px;">
                                                                  <div class="col-md-3">
                                                                     <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cloud-arrow-up-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg"  style="text-align: center; color: #fff; font-size: 27px;">
                                                                        <path fill-rule="evenodd" d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2zm2.354 5.146l-2-2a.5.5 0 0 0-.708 0l-2 2a.5.5 0 1 0 .708.708L7.5 6.707V10.5a.5.5 0 0 0 1 0V6.707l1.146 1.147a.5.5 0 0 0 .708-.708z"/>
                                                                     </svg>
                                                                  </div>
                                                                  <div class="col-md-10" style=" width: auto;">
                                                                     <p style="text-align: center; color: #fff; ">Subir Imagen</p>
                                                    
                                                                  </div>
                                                         
                                                                  <input style="position: absolute; top: 0px; left: 0px; right: 0px; bottom: 0px; width: 100%; height: 100%; opacity: 0; " type="file" name="lateral_der"
                                                                  id="d_actualizado">                                                             
                                                    
                                                    </div>

                                                    </div>


                                                    <div class="col-md-12" style="margin-top: 5%; left: 60%;">

                                                    <input type="submit" value="Añadir" class="btn btn-sm btn-success">

                                                    </div>



                                                </div>
      
                                                      

                                            </form>
                                        </div>
                                        <div class="modal-footer" >
                                            <button type="button" class="btn btn-secondary" style="margin-top: 3%;"
                                                data-dismiss="modal">Cancelar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="{{asset('js/app.js')}}"></script>
</body>

</html>




<!--actualizar perfil-->
<script type="text/javascript">

    function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#category-img-tag').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#avatar").change(function(){
    readURL(this);
});
</script>


<!--crear imagen usuario-->
<script>
  function readImage (input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) {
          $('#crear-foto-usu').attr('src', e.target.result); // Renderizamos la imagen
      }
      reader.readAsDataURL(input.files[0]);
    }
  }

  $("#crear").change(function () {
    // Código a ejecutar cuando se detecta un cambio de archivO
    readImage(this);
  });
</script>




<!--actualizar imagen usuario-->
<script>
  function actuImage (input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) {
          $('#actu-foto-usu').attr('src', e.target.result); // Renderizamos la imagen
      }
      reader.readAsDataURL(input.files[0]);
    }
  }

  $("#actualizar").change(function () {
    // Código a ejecutar cuando se detecta un cambio de archivO
    actuImage(this);
  });
</script>



<!--actualizar foto veiculo izquierda-->
<script>
  function actuImageizq (input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) {
          $('#actualizar_i').attr('src', e.target.result); // Renderizamos la imagen
      }
      reader.readAsDataURL(input.files[0]);
    }
  }

  $("#i_actualizado").change(function () {
    // Código a ejecutar cuando se detecta un cambio de archivO
    actuImageizq(this);
  });
</script>


<!--actualizar foto veiculo frontal-->
<script>
  function actuImagefron (input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) {
          $('#actualizar_f').attr('src', e.target.result); // Renderizamos la imagen
      }
      reader.readAsDataURL(input.files[0]);
    }
  }

  $("#f_actualizado").change(function () {
    // Código a ejecutar cuando se detecta un cambio de archivO
    actuImagefron(this);
  });
</script>



<!--actualizar foto veiculo derec-->
<script>
  function actuImageder (input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) {
          $('#actualizar_d').attr('src', e.target.result); // Renderizamos la imagen
      }
      reader.readAsDataURL(input.files[0]);
    }
  }

  $("#d_actualizado").change(function () {
    // Código a ejecutar cuando se detecta un cambio de archivO
    actuImageder(this);
  });
</script>


<!--subir foto veiculo izquierda-->
<script>
  function actuImageizqui (input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) {
          $('#actualizar_iz').attr('src', e.target.result); // Renderizamos la imagen
      }
      reader.readAsDataURL(input.files[0]);
    }
  }

  $("#iz_actualizado").change(function () {
    // Código a ejecutar cuando se detecta un cambio de archivO
    actuImageizqui(this);
  });
</script>


<!--subir foto veiculo frontal-->
<script>
  function actuImagefrontal (input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) {
          $('#actualizar_fr').attr('src', e.target.result); // Renderizamos la imagen
      }
      reader.readAsDataURL(input.files[0]);
    }
  }

  $("#fr_actualizado").change(function () {
    // Código a ejecutar cuando se detecta un cambio de archivO
    actuImagefrontal(this);
  });
</script>



<!--subir foto veiculo derec-->
<script>
  function actuImagedere (input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) {
          $('#actualizar_de').attr('src', e.target.result); // Renderizamos la imagen
      }
      reader.readAsDataURL(input.files[0]);
    }
  }

  $("#de_actualizado").change(function () {
    // Código a ejecutar cuando se detecta un cambio de archivO
    actuImagedere(this);
  });
</script>









<script>
    const buscar = document.getElementById('buscar');
    const result = document.getElementById('result');
    buscar.addEventListener('keyup', () => {
      
       livesearch()
    });

       
    const livesearch = () => {
        $.getJSON('{{ route('users.search') }}',function (data) {
            result.innerHTML = null
                $.each(data, function(key, user) {

                    if (buscar.value != '') {

                            const re = new RegExp(buscar.value,"gi");
                            var res = user.name.match(re);
                                            
                        if (user.name.match(re)) {
                            result.innerHTML += ' <a href="./'+user.id+'"><li class="list-group-item"><img src="/uploads/avatars/'+user.avatar+'" height="40" width="40" class="img-thumbnail" />'+user.name+'<span class="text-muted"></span></li></a> ';
                        } 

                    } 
                });
            });
    } 

</script>