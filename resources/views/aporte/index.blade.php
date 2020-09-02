@extends('layouts.app')

@section('content')


    <!-- breadcrumb start-->
    <section class="breadcrumb fondo_aporte">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Tu Aporte</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!--mensaage--->

    @if(session('info'))
    <div class="container" style=" margin-top: 5%;">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="alert alert-success">
                    {{ session('info') }}

                </div>

            </div>

        </div>

    </div>

    @endif

    <!--================Blog Area =================-->
    <section style="margin-top: 3%;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">                    
                   <div class="card">
                       <div class="card-header" style="background-color: #6345fe;">
                          <h3 style="color: #fff;">Aporta tu idea o proyecto</h3>
                       </div>
                          <div class="card-body">
                            <h5 class="card-title">Presente sus propuestas para economías colaborativas en sector transporte 2020</h5>
                            <p class="card-text">Apertura: 23 de Enero de 2020 a las 00:00</p>
                            <p class="card-text">Cierre: Abierta</p>
                            <a href="{{ route('aporte.create')}}" class="button button-contactForm btn_4 pull-right">Subir su Proyecto</a>
                          </div>
                   </div>             
                </div>
            </div>
        </div>
    </section>
   

    <section style="margin-top:3%; margin-bottom: 3%; ">

    <div class="container">
   
    
    <div class="card direct-chat direct-chat-primary">
    <div class="card-header">                       
        <h3 class="card-title" style="color: #6345fe;">Lista de Proyectos</h3>
    </div> 
    <div class="card-body" >
        <div class="direct-chat-messages">
        <div class="row" > 
                        <div class="col-md-12">
                            <table class="table-responsive-xl">
                                <table class="table table-striped table-hover table-responsive-xl">
                                       <thead>
                                           <tr>
                                               <th width="10px">ID</th>
                                               <th>Nombre</th>
                                               <th>Email</th>
                                               <th>Empresa</th>
                                               <th>Archivo</th>
                                               <th>Descripcion</th>
                                               <th colspan="3">&nbsp;</th>
                                           </tr>
                                       </thead>
                                       <tbody >
                                           @foreach ($aporte as $item)
                                           <tr>
                                           <td>{{ $item->id }}</td>
                                           <td>{{ $item->name }}</td>
                                           <td>{{ $item->email }}</td>
                                           <td>{{ $item->empresa }}</td>
                                           <td>
                                               <a href="{{ route('aporte.descarga', $item->adjunto)}}" type="button">
                                                <i class="fas fa-cloud-download-alt fa-2x"></i>
                                               </a>
                                            </td>
                                           <td>{{ $item->descripcion }}</td>
                                           <td>
       
                                               <a href="{{ route('aporte.show', $item->id)}}" class="cta_btn btn_1 pull-right">Abrir</a>                           </td>
       
                                           </tr>
       
                                           @endforeach
       
                                       </tbody>

                                </table>
                              

                            </table>

                            {{ $aporte->render() }}

                        </div>

                    

                </div>

        </div>
           
            </div>

    </div>

     </div>
    
   
  
    
    </section>

    

    @endsection
