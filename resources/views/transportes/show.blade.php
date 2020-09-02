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
                          <a class="nav-link" href="{{ route('transportes.index') }}">Camioneros</a>
                        </li>

                      </ul>

                      <ul>
                        <li class="nav-item collapse navbar-collapse" id="navbarTogglerDemo03">
                            <a  class="nav-link" href="#"> <strong>{{ Auth::user()->name }}</strong> </a>
                          </li>
                      </ul>



                    </div>
                  </nav>

                <div class="panel panel-content">

                <div class="card mb-3" style="max-width: 920px; margin-top: 5%;">
                     <div class="row no-gutters">
                       <div class="col-md-2">
                        <img src="{{ asset('/public/images/conductores/'.$transporte->logo) }}" class="card-img" alt="..." style="width: 150px; height:220px ; "/>
                       </div>
                       <div class="col-md-10">
                         <div class="card-body">
                           <h1 class="card-title">{{ $transporte->name }} {{ $transporte->apellido }}</h1>
                           <h4>Conductor de Vehiculo de Carga Pesada</h4>
                           <p class="card-text">{{ $transporte->experiencia }}</p>                         
                         </div>
                       </div>
                     </div>
                   </div> 
                   
                   <div class="card" style="width: 920px; margin-top: -1%;">
                         <div class="card-header" style="background-color:paleturquoise; text-align: center; font-weight: bold; font-size: 20px; color: steelblue;">
                           Datos Personales
                         </div>
                         <ul class="list-group list-group-flush">
                           <li class="list-group-item"><b>Lugar de Nacimiento:</b> {{ $transporte->lugar_nac }} </li>
                           <li class="list-group-item"><b>Fecha de Nacimiento:</b> {{ $transporte->f_nac }} </li>
                           <li class="list-group-item"><b>Estado Civil:</b> {{ $transporte->estado_civil }} </li>                                                     
                         </ul>
                  </div>  
                   
                   
                   <div class="card" style="width: 920px; margin-top: 1%;">
                         <div class="card-header" style="background-color:paleturquoise; text-align: center; font-weight: bold; font-size: 20px; color: steelblue;">
                           Datos de Contacto
                         </div>
                         <ul class="list-group list-group-flush">
                           <li class="list-group-item"><b>Dirección:</b> {{ $transporte->dir }} </li>
                           <li class="list-group-item"><b>Telefono:</b> {{ $transporte->t_fijo }} </li>
                           <li class="list-group-item"><b>Celular:</b> {{ $transporte->t_celular }} </li>
                           <li class="list-group-item"><b>Correo:</b> {{ $transporte->correo }} </li>                           
                         </ul>
                  </div>  
                  
                  <div class="card" style="width: 920px; margin-top: 1%; margin-bottom: 5%;">
                         <div class="card-header" style="background-color:paleturquoise; text-align: center; font-weight: bold; font-size: 20px; color: steelblue;">
                           Documentacion
                         </div>
                         <ul class="list-group list-group-flush">
                           <li class="list-group-item"><b>Tipo Documento:</b> {{ $transporte->tipo_doct }} </li>
                           <li class="list-group-item"><b>Numero de Documento:</b> {{ $transporte->num_doct }} </li>
                           <li class="list-group-item"><b>Tipo de Licencia:</b> {{ $transporte->tipo_lic }} </li>
                           <li class="list-group-item"><b>Numero de Licencia:</b> {{ $transporte->num_lic }} </li> 
                           <li class="list-group-item"><b>Fecha de Vencimiento:</b> {{ $transporte->f_vencimiento }} </li> 
                           <li class="list-group-item"><b>Numero de Libreta militar:</b> {{ $transporte->num_libret_t }} </li>                          
                         </ul>
                  </div>  
                
                </div>

              </div>

              <div class="col-md-1">

              </div>


        </div>
    </div>
</body>
</html>
