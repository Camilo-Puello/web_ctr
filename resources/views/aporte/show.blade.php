<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Central de Riesgo de Transporte</title>
    <link rel="icon" href="/img/favicon.png">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>

<body style="background: rgb(243, 243, 243);">

    <div class="container">
        <div class="row">
            <div class="col-md-1 ">

            </div>
            <div class="col-md-10">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="/">Inicio</a>

                    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                          <a class="nav-link" href="#"> <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="{{ route('aporte.index') }}">Aportes</a>
                        </li>

                      </ul>

                      <ul>
                        <li class="nav-item collapse navbar-collapse" id="navbarTogglerDemo03">
                            <a  class="nav-link" href="#"> <strong>{{ Auth::user()->name }}</strong> </a>
                          </li>
                      </ul>



                    </div>
                  </nav>

                   <!-- Section card -->

                   <section style="margin-top: 3%;">
                       <div class="container py-1">
                        <div class="card ">
                                <div class="card-body w-100">
                                    <div class="card-block p-3">
                                        <h4 class="card-title"><strong>Fecha de Creación: </strong>{{ $aporte->created_at }}</h4>
                                            <hr>
                                              <p><strong>Nombre: </strong>{{ $aporte->name }}</p>
                                              <p><strong>Email: </strong>{{ $aporte->email }}</p>
                                              <p><strong>Empresa: </strong>{{ $aporte->empresa }}</p>
                                              <p><strong>Descripcion: </strong>{{ $aporte->descripcion }}</p>
                                              <strong>Archivo: </strong><a href="{{ route('aporte.descarga', $aporte->adjunto)}}" type="button" class="btn btn-primary">
                                                Descargar PDF
                                               </a>

                                    </div>
                                    
                         

                                </div>
                        </div>

                    </div>
                </section>



              </div>


              </div>


        </div>
    </div>
</body>
</html>
