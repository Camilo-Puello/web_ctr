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
                    <a class="navbar-brand" href="/home">Inicio</a>

                    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                          <a class="nav-link" href="#"> <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="{{ route('propietarios.index') }}">Propietarios</a>
                        </li>

                      </ul>

                      <ul>
                        <li class="nav-item collapse navbar-collapse" id="navbarTogglerDemo03">
                            <a  class="nav-link" href="#"> <strong>{{ Auth::user()->name }}</strong> </a>
                          </li>
                      </ul>



                    </div>
                  </nav>

                  <div class="container" style="padding-top: 3%; margin-bottom: 3%;">
                    <div class="row">
                      <div class="col-md-12">                        
                      <div class="row">
                        <div class="col-md-6">                         
                          <p class="card-text" style="margin-left: 40px; font-size: 22px;"><b>{{ $propietario->marca }}</b></p>
                          <p class="card-text" style="margin-top:-9%; font-size: 60px; color: brown;"><b>{{ $propietario->tipo }}</b></p>

                        </div>

                        <div class="col-md-6">                        
                        <p class="card-text" style="margin-top:7%; margin-left: 80%; font-size: 40px; color: brown;"><b>{{ $propietario->clase }}</b></p>

                        </div>

                        <div class="col-md-12" style="margin-top: -2%;">
                          <hr style="height: 3%; background-color:#ccc ;">

                        </div>

                        <div class="col-md-6">

                          <div class="col md-12">
                          <div class="card text-white">
                            <img src="{{ asset('/public/images/propietarios/vehicles/'.$propietario->image_1) }}" class="card-img" style="width: 100%; height: 300px;"/>
                              
                          </div>

                          </div>

                          <div class="col md-12" style="margin-top: 2%;">
                          <div class="card  text-black">
                            <img src="{{ asset('/public/images/propietarios/vehicles/'.$propietario->image_2) }}" class="card-img" style="width: 100%; height: 300px;"/>
                             
                          </div>

                          </div>

                        </div>

                        <div class="col-md-6">
                        <div class="card bg-light mb-3" style="max-width: 100%; height: 700px;">
                            <div class="card-header" style="color: brown;"><b>Especificaciones</b></div>
                            <div class="card-body">
                              <div class="card" style="width: 100%;">
                                <div class="card-header" style="color: brown">
                                 <b>Propietario</b> 
                                </div>
                                <ul class="list-group list-group-flush">
                                  <li class="list-group-item"><b>Nombre: </b> {{ $propietario->name }}</li>
                                  <li class="list-group-item"><b>Conductor: </b> {{ $propietario->conductor }}</li>
                                  <li class="list-group-item"><b>Contacto: </b> {{ $propietario->telef }}</li>
                                </ul>
                              </div>

                              <div class="card" style="width: 100%; margin-top: 2%;">
                                <div class="card-header" style="color: brown">
                                 <b>Ficha tecnica</b> 
                                </div>
                                <ul class="list-group list-group-flush">
                                  <li class="list-group-item"><b>Modelo: </b> {{ $propietario->modelo }}</li>
                                  <li class="list-group-item"><b>Color: </b> {{ $propietario->color }}</li>
                                  <li class="list-group-item"><b>Linea: </b> {{ $propietario->linea }}</li>
                                  <li class="list-group-item"><b>Motor: </b> {{ $propietario->motor }}</li>
                                  <li class="list-group-item"><b>Chasis: </b> {{ $propietario->chasis }}</li>
                                  <li class="list-group-item"><b>Capacidad: </b> {{ $propietario->capacidad }}</li>
                                  <li class="list-group-item"><b>Placa: </b> {{ $propietario->placa }}</li>
                                </ul>
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
</body>
</html>
