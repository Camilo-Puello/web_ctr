@extends('layouts.app')

@section('content')

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
@include('sweet::alert')

  <!-- breadcrumb start-->
  <section class="breadcrumb fondo_encuesta">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="breadcrumb_iner text-center">
            <div class="breadcrumb_iner_item">
              <h2>Opina</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumb start-->

  <!-- ================ contact section start ================= -->
  <section class="contact-section blog_padding" style="margin-top: -90px;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="contact-title" style="color: #6345fe; font-size: 40px;">Danos tu opinion</h1>
        </div>
        <div class="col-md-12">

          @foreach ($questionnaire as $encuesta)


                <div class="card mt-4" style="width: 350px; float: left; margin-right: 2%;">

                  <div class="card-header" style="text-align: center"><h3><strong>{{ $encuesta->tittle }}</strong></h3></div>

                  <div class="card-body" style="text-align: center"><a class="btn btn-dark" href="/surveys/{{ $encuesta->id }}-{{ Str::slug($encuesta->tittle) }}">Responder cuestionario</a></div>

                  <div class="card-footer" style="text-align: center"><strong>{{ $encuesta->questions->count() }}</strong> Preguntas </div>

                </div>

              
          @endforeach
        
        </div>
       
      </div>
    </div>
  </section>
  <!-- ================ contact section end ================= -->

@if(Session::has('Encuesta'))
<script> 
  Swal.fire({

    icon: 'success',
    title: '!Gracias por completar la encuesta!',
    
  })
</script>
@endif

@if(Session::has('Votado'))
<script> 
  Swal.fire({

    icon: 'error',
    title: 'Oops...',
    text: '¡Ya has respondido esta encuesta!'
    
  })
</script>
@endif

  @endsection
