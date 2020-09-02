@extends('layouts.app')

@section('content')

    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>servicios</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!-- Service part start-->
    <section class="service_part single_page_service">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <div class="service_text"></div>
                        <h3 style="color:  #6345fe;">Buscar Servicios <img src="img/icon/process_1.svg" alt="" style="width: 50px;"></h3>
                </div>

                <div class="col-lg-6">
                     <!--======Buscador======-->
                         
                    <form class="form-inline mb-3" style="margin-left: 50%;">
                        <div class="input-group input-group-mb" >
                          <input class="form-control" type="search" placeholder="Buscar" aria-label="Search" name="search">
                          <div class="input-group-append" style="margin-left: 35%;">
                            <button class="btn btn-primary" type="submit">
                              <i class="fas fa-search"></i>
                            </button>
                          </div>
                        </div>
                    </form>

                </div>

    </section>

    <section class="blog_part padding_bottom">
        <div class="container">
            <div class="row">                       
                <div class="col-md-12">

                @foreach($posts as $item)
                    <div class="row row-cols-3 row-cols-md-3"  style="float: left;">
                        <div class="col mb-2">
                        <div class="card" style="width: 360px; margin-left: 10px; margin-top: 10px;">
                        <img src="{{ asset('/public/images/servicios/logos/'.$item['logo']) }}" class="card-img-top" alt="..." style="height: 230px !important;">
                        <div style="font-weight: bold; background-color: #6345fe;  text-align: center;">
                        <h1 style="color: #fff;  font-size: 20px;">{{ $item->empresa }}</h1>

                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-5">
                                <ul class="list-group list-group-flush">
                                  <li class="list-group-item" style="font-weight: bold;">Programado:</li>
                                  <li class="list-group-item" style="font-weight: bold;">Origen:</li>
                                  <li class="list-group-item" style="font-weight: bold;">Destino:</li>
                                  <li class="list-group-item" style="font-weight: bold;">Hora salida:</li>
                                  <li class="list-group-item" style="font-weight: bold;">Hora llegada:</li>
                                  <li class="list-group-item" style="font-weight: bold;">Capacidad:</li>
                                  <li class="list-group-item" style="font-weight: bold;">Vehiculo:</li>
                                  <li class="list-group-item" style="font-weight: bold;">Contacto:</li>
                                  <li class="list-group-item" style="font-weight: bold;">Correo:</li>
                                </ul>

                                </div>
                                <div class="col-md-7">
                                <ul class="list-group list-group-flush">
                                  <li class="list-group-item">{{ $item->fecha }}</li>
                                  <li class="list-group-item">{{ $item->origen }}</li>
                                  <li class="list-group-item">{{ $item->destino }}</li>
                                  <li class="list-group-item">{{ $item->h_salida }}</li>
                                  <li class="list-group-item">{{ $item->h_llegada }}</li>
                                  <li class="list-group-item">{{ $item->capacidad_d }}</li>
                                  <li class="list-group-item">{{ $item->vehiculo }}</li>
                                  <li class="list-group-item">{{ $item->contacto }}</li>
                                  <li class="list-group-item">{{ $item->correo }}</li>
                                </ul>

                                </div>

                            </div>                   
                          
                        </div>
                    </div>

                        </div>
                    
                    

                    </div>                              
                   

               
                    @endforeach                

                </div>

                <div style="margin-top: 2%;">

                {{$posts->links()}}

               </div>

            </div>

        </div>
               
                
            
    </section>
<!-- Service part end-->
@endsection

