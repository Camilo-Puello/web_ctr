<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Comunidad Camionera de Colombia</title>
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
                          <a class="nav-link" href="{{ route('lider.index') }}">Elegir lider</a>
                        </li>

                      </ul>

                      <ul>
                        <li class="nav-item collapse navbar-collapse" id="navbarTogglerDemo03">
                            <a  class="nav-link" href="#"> <strong>{{ Auth::user()->name }}</strong> </a>
                          </li>
                      </ul>



                    </div>
                  </nav>

                  <div class="container">
                    <div class="row">
                      <div class="col-md-12">
                      <div class="card mb-3" style="max-width: 950px; margin-top: 3%;">
                          <div class="row no-gutters">
          
                            <div class="col-md-8">
                              <div class="card-body">
                                <h1 class="card-title" style="text-align: center;">{{ $lider->candidato }}</h1>
                                <p class="card-text" style=" margin-top: 5%; text-align: center;">{{ $lider->desxripcion }}</p>                                
                                <p class="card-text"  style="text-align: center;"><small class="text-muted"><b>Conductor: </b>{{ $lider->name }}  </b>                               
                                <p class="card-text"  style="text-align: center; margin-top: -15px;"><small class="text-muted" style="font-size: 15px;">{{ $lider->coop }}</small></p>
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>
                      <div class="col-md-12">

                      </div>

                    </div>

                  </div>  



              </div>
        </div>
    </div>
</body>
</html>
