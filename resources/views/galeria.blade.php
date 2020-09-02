@extends('layouts.app')

@section('content')

  <!-- breadcrumb start-->
  <section class="breadcrumb fondo_galeria">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="breadcrumb_iner text-center">
            <div class="breadcrumb_iner_item">
              <h2>Galeria</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumb start-->

  <!-- ================ contact section start ================= -->
  <section class="contact-section blog_padding" style="margin-top: -70px;">
    <div class="container">
      <div class="row">
        <div class="col-12" >
        <span><h1 style="color:  #6345fe;"> Algunas de las imagenes</h1></span>        
          <h1 class="contact-title" style="font-size:70px; margin-top: -30px; color:  #6345fe;">De nuestros Usuarios</h1>
        </div>

        <div class="col-lg-12">
          <div class="row">
          @foreach($fotos as $ft)
        <div class="col-md-4" style="margin-bottom: 20px;">            
          <div class="card" style="width: 35rem; height: 350px;">
              <img src="{{ asset('/public/images/vehicle/'.$ft->first()->lateral_izq) }}" class="card-img-top" alt="..." style="height: 300px;">
               <div class="card-body">
                 <p class="card-text">Publicado el: <strong>{{$ft->created_at}}</strong></p>
               </div>
            </div>
        </div>

        <div class="col-md-4">
             <div class="card" style="width: 35rem; height: 350px;">
                   <img src="{{ asset('/public/images/vehicle/'.$ft->first()->frontal) }}" class="card-img-top" alt="..." style="height: 300px;">
                    <div class="card-body">
                      <p class="card-text">Publicado el: <strong>{{$ft->created_at}}</strong></p>
                    </div>
             </div>
        </div>

        <div class="col-md-4">
        <div class="card" style="width: 35rem; height: 350px;">
              <img src="{{ asset('/public/images/vehicle/'.$ft->first()->lateral_der) }}" class="card-img-top" alt="..." style="height: 300px;">
               <div class="card-body">
                 <p class="card-text">Publicado el: <strong>{{$ft->created_at}}</strong></p>
               </div>
            </div>
        </div>          
            @endforeach
          

          

          </div>
         
             

        </div>      
      </div>
    </div>
  </section>
  <!-- ================ contact section end ================= -->

  @endsection
