@extends('layouts.app')

@section('content')


    <!-- breadcrumb start-->
    <section class="breadcrumb fondo_nosotros">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Sobre nosotros</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!-- sobre nosotros-->
    <section class="about_part section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="about_part_img">
                        <h2 style="text-align: center; ">Quienes somos</h2>
                        <img src="img/about_2.png" alt="#">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="about_part_text">
                        <div class="about_text_iner">
                            <p>CCC,  “Comunidad Camionera de Colombia” es un sitio web, pensado para el gremio de transportadores de carga pesada en carretera, tanto empresarios, propietarios de vehículos de carga y camioneros, que tiene como finalidad, brindar información pertinente, sobre noticias, ubicación y estado de las vías, el cual les permita tomar acciones beneficiosas tanto a empresarios como a los camioneros.
                            </p>
                            <p>El impacto que CCC “Comunidad Camionera de Colombia”, pretende tener, es que el gremio de transportadores cuente con un medio eficaz, que les permita actualizar su información y conocimientos de las leyes, estatutos y estado de las vías a donde les toque transportar carga pesada. </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- about part end-->



    <!--::mision::-->
    <section class="blog_part single_blog_page padding_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="blog_tittle">
                        <h2>Misión</h2>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="blog_tittle">
                        <h2>Visión</h2>
                    </div>
                </div>


                <div class="col-lg-6 col-sm-6">
                    <div class="single_blog">
                        <div class="single_blog_img">
                            <img src="img/blog/blog_1.jpg" alt="" style="margin-left:5%;">


                        </div>
                        <div class="single_blog_text">
                            <h3>Nuestra Misión</h3>
                            <p>Visibilizar al conductor colombiano, principal eslabón de la cadena del transporte, mediante la utilización de herramientas tecnológicas, de gestión de riesgo operativo y sistemas integrados de información. </p>

                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="single_blog">
                        <div class="single_blog_img">
                            <img src="img/blog/blog_2.jpg" alt="" style="margin-left:5%;">


                        </div>
                        <div class="single_blog_text">
                            <h3>Nuestra Visión</h3>
                            <p>Convertirnos en el principal gestor de la unión del transportador colombiano, para que de manera democrática e incluyente podamos participar en la toma de decisiones que generen bienestar y progreso, caracterizandonos por la implementación de los más innovadores desarrollos tecnológicos,  para el mejoramiento de la seguridad y la eficiencia del transporte de carga por carretera.</p>

                        </div>

                    </div>
                </div>




                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::blog part end::-->



    @endsection
