@extends('layouts.app')

@section('content')

  <!-- breadcrumb start-->
  <section class="breadcrumb fondo_noti">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="breadcrumb_iner text-center">
            <div class="breadcrumb_iner_item">
              <h2>Noticias</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumb start-->

  <!-- ================ contact section start ================= -->
  <section class="contact-section blog_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h2 class="contact-title" style="color:#6345fe ; font-size: 40px;">Noticias relacionadas</h2>
        </div>

         <!--======Buscador======-->
        <div class="col-md-6" style=" padding-left: 260px;">           
            <form class="form-inline mb-3" >
                <div class="input-group input-group-mb" >
                  <input class="form-control" type="search" placeholder="Ingrese la fecha de la noticia" aria-label="Search" name="search">
                  <div class="input-group-append" style="margin-left: 35%;">
                    <button class="btn btn-primary" style="background-color:#6345fe;" type="submit">
                      <i class="fas fa-search"></i>
                    </button>
                  </div>
                </div>
            </form>              
        </div>

        <!--========empresas generadoras========-->

        <div class="col-md-12" style="margin-top: 7%;">
        <section class="blog_part padding_bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                @foreach ($posts as $post)
                <div class="col-lg-4 col-sm-6"  style="float: left;">
                    <div class="single_blog">
                        <div class="single_blog_img">
                            <img style="width:350px; height:300px;" src="{{ asset('/public/images/noticias/'.$post['image_url']) }}" alt="">
                            <div style="background-color: #6345fe;">
                                <h1 style="text-align: center; color: #fff;">{{$post['created_at']}}</h1>
                            </div>

                        </div>
                        <div class="single_blog_text">
                            <h3>{{ $post['tittle']}}</h3>
                            <div>

                            <p>{!! getShorterString ($post['content'], 300) !!}</p>

                            </div>
                            <a class="btn_3" href="/home/{{ $post['id']}}">Leer más <i class="ti-arrow-right"></i> </a>
                            
                        </div>
                        
                    </div>
                </div>
 
            @endforeach                    
                </div>
               
            </div>
            {{$posts->links()}}
        </div>
        </section>

        </div>
      
       
        
        
      
      </div>
    </div>
  </section>
  <!-- ================ contact section end ================= -->

  @endsection
