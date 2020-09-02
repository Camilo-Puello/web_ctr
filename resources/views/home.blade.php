@extends('layouts.app')

@section('content')



    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h1><b>C</b>omunidad  <br> <b>C</b>amionera de <br> <b>C</b>olombia</h1>
                            <p>Unete a nuestro equipo <br> Y se parte de esta experiencia </p>

                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </section>
    <!-- banner part start-->



    <!-- about part start-->
    <section class="about_part section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="about_part_img">
                        <h2 style="text-align: center; ">Sobre Nosotros</h2>
                        <img src="img/about_2.png" alt="#">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="about_part_text">
                        <div class="about_text_iner">
                            <p>CCC,  “Central de riesgos y transporte” es un sitio web, pensado para el gremio de transportadores de carga pesada en carretera, tanto empresarios, propietarios de vehículos de carga y camioneros, que tiene como finalidad, brindar información pertinente, sobre noticias, ubicación y estado de las vías, el cual les permita tomar acciones beneficiosas tanto a empresarios como a los camioneros.
                            </p>
                            <p>El impacto que CCC “Comunidad Camionera de Colombia”, pretende tener, es que el gremio de transportadores cuente con un medio eficaz, que les permita actualizar su información y conocimientos de las leyes, estatutos y estado de las vías a donde les toque transportar carga pesada. </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- about part end-->

    <!-- Service part start-->
    <section class="service_part">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="service_text">
                        <h2>Conozca Mas <br><span> De Nuestra Plataforma </span></h2>
                        <p>En CCC queremos tu complacerte, por eso te invitamos a que en nuestra galeria de imagenes muestres los vehiculos de tu negocio.</p>
                        <p>En CCC la seguridad de tu informacion es muy importante por eso te invitamos a que conozcas nuestras politicas de seguridad y el porque trabajar con nosotros vale la pena.</p>
                        <p>CCC esta con tigo, por eso invita al gremio de los camioneros a unerse a nuestra plataforma y mirar las diferentes empresas que se han unido a CCC.</p>
                        <p>Danos tu opinion, queremos que opines sobre temas relacionados al gremio de los camioneros, porque en CRT tu opinion es importante.</p>
                        <a href="/servicios" class="btn_1">Ir a servicios</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single_service_text">
                        <a href="/galeria"><img src="img/icon/aliados.png" alt="" style="width: 60px; height: 60px;"></a>
                        <h4>Galeria</h4>
                        <p>En nuestra galeria de imagenes podras mostrar los vehiculos de tu negocio. </p>
                    </div>
                    <div class="single_service_text">
                        <a href="/seguridad"><img src="img/icon/seguridad.png" alt=""  style="width: 60px; height: 60px;"></a>
                        <h4>Seguridad</h4>
                        <p>Nuestras politicas protegen tanto tu información virtual, como tu integridad.  </p>
                    </div>
                    <div class="single_service_text">
                        <a href="/noti"><img src="img/icon/hv.png" alt=""  style="width: 60px; height: 60px;"></a>
                        <h4>Noticias</h4>
                        <p>Amigo camionero, CCC te invita a mantenerte informado, entra a nuestra sección noticias. </p>
                    </div>
                    <div class="single_service_text">
                        <a href="/opinion"><img src="img/icon/opina.png" alt="" style="width: 60px; height: 60px;"></a>
                        <h4>Opina</h4>
                        <p>En CCC tu opinion nos importa, entra a nuestro portal y opina sobre temas relacionados.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service part end-->

    <!-- cta_part part start-->
    <section class="cta_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-8">
                    <div class="cta_text">
                        <h2>servicio de carga nacional</h2>
                        <p>Por este medio nuestras empresas aliadas podran ofrecer sus servicios de transporte de carga a nivel nacional. </p>
                        <a href="/serv" class="cta_btn btn_1">ir a Servicios</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cta_part part end-->

    <!-- Seccion empresas-->
    <section class="blog_part padding_bottom" style="margin-top: 5%;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog_tittle">
                        <h2>Empresas Transportadoras Afiliadas</h2>
                    </div>
                </div>
                @foreach ($emp as $post)
                <div class="col-lg-4 col-sm-6" style="margin-top: 4%;">
                    <div class="single_blog">
                        <div class="single_blog_img">
                        <a href="/noti"><img src="{{ asset('/public/images/transportadora/logos/'.$post->logo) }}" style="height:285px;"/></a>
                            <div style="font-size: 15px; background-color: #6345fe;">
                               <h1 style="color: #fff; font-size: 22px; text-align: center;">{{ $post['name'] }}</h1>
                            </div>

                        </div>
                        <div class="single_blog_text">
                            <h3><b>Direccion:</b> {{ $post['dir']}}</h3>
                            <p><b>Contacto 1:</b> {{ $post['telefono'] }}</p>
                            <p><b>Contacto 2:</b> {{ $post['cel'] }}</p>
                            <p style="text-align: center;">{{ $post['correo'] }}</p>
                            
                        </div>                        
                    </div>
                </div>
                @endforeach
            
            </div>
            {{$emp->links()}}
        </div>
    </section>
    <!-- fin seccion empresas-->



     <!-- Seccion empresas-->
     <section class="blog_part padding_bottom" style="margin-top: 5%;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog_tittle">
                        <h2>Empresas Generadoras Afiliadas</h2>
                    </div>
                </div>
                @foreach ($generadora as $post)
                <div class="col-lg-4 col-sm-6" style="margin-top: 4%;">
                    <div class="single_blog">
                        <div class="single_blog_img">
                        <a href="/noti"><img src="{{ asset('/public/images/generadoras/logos/'.$post->logo) }}" style="height:285px;"/></a>
                            <div style="font-size: 15px; background-color: #6345fe;">
                               <h1 style="color: #fff; font-size: 22px; text-align: center;">{{ $post['name'] }}</h1>
                            </div>

                        </div>
                        <div class="single_blog_text">
                            <h3><b>Direccion:</b> {{ $post['dir']}}</h3>
                            <p><b>Contacto 1:</b> {{ $post['telefono'] }}</p>
                            <p><b>Contacto 2:</b> {{ $post['cel'] }}</p>
                            <p style="text-align: center;">{{ $post['correo'] }}</p>
                            
                        </div>                        
                    </div>
                </div>
                @endforeach
            
            </div>
            {{$generadora->links()}}
        </div>
    </section>
    <!-- fin seccion empresas-->



 
       <!-- Seccion curriculun-->
       <section class="blog_part padding_bottom" style="margin-top: 5%;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog_tittle">
                        <h2>Conoce Nuestro Talento Humano</h2>
                    </div>
                </div>
                @foreach ($transporte as $post)
                <div class="col-lg-4 col-sm-6" style="margin-top: 4%;">
                    <div class="single_blog">
                        <div class="single_blog_img">
                        <a href="/home"><img src="{{ asset('/public/images/conductores/'.$post->logo) }}" style="height:285px;"/></a>
                            <div style="font-size: 15px; background-color: #6345fe;">
                               <h1 style="color: #fff; font-size: 22px; text-align: center;">{{ $post['name'] }} {{ $post['apellido'] }}</h1>
                            </div>

                        </div>
                        <div class="single_blog_text">
                            <h3> {{ $post['experiencia']}}</h3>
                            <h3 style="text-align: center;">{{ $post['correo']}}</h3>
                           

                            
                        </div> 
                        <a class="btn_3" href="/home">Leer más <i class="ti-arrow-right"></i> </a>                       
                    </div>
                </div>
                @endforeach
            
            </div>
            {{$transporte->links()}}
        </div>
    </section>
    <!-- fin seccion curriculun-->


   

    <!--::seccion noticias::-->
    <section class="blog_part padding_bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog_tittle">
                        <h2>Noticias Relacionadas</h2>
                    </div>
                </div>
                @foreach ($posts as $post)
                <div class="col-lg-4 col-sm-6">
                    <div class="single_blog">
                        <div class="single_blog_img">
                            <a href="/home/{{ $post['id']}}"><img style="width:350px; height:350px;" src="{{ asset('/public/images/noticias/'.$post['image_url']) }}" alt=""></a>
                            <div style="background-color: #6345fe;">
                                <h1 style="text-align: center; color: #fff;">{{$post['created_at']}}</span>
                            </div>

                        </div>
                        <div class="single_blog_text">
                            <h3><a href="/noti">{{ $post['tittle']}}</a></h3>
                            <p>{!! getShorterString ($post['content'], 200) !!}</p>
                            <a href="#"> <i class="ti-heart"></i> 100 Likes</a>
                            <a href="#"> <i class="ti-comments-smiley"></i> 1 Comment</a>
                        </div>
                        <a class="btn_3" href="/noti">Leer más <i class="ti-arrow-right"></i> </a>
                    </div>
                </div>
 
            @endforeach
            </div>
            {{$posts->links()}}
        </div>
    </section>
    <!--::fin seccion noticias::-->

    @endsection
