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
                          <a class="nav-link" href="{{ route('subirArchivo.index') }}">Mis Archivos</a>
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
                            <div class="col-md-12">                              
                                <h3 style="margin: 10px;">{{ $subir->nombre }}</h3>
                            </div>
                            <hr>
                            <div class="col-md-12">
                              <div class="card-body">                               
                                <h1><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-zip-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="margin-right: 2px;">
                                <path fill-rule="evenodd" d="M8 1h4a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h2.5v1h1v1h-1v1h1v1h-1v1h1v1H9V6H8V5h1V4H8V3h1V2H8V1zM6.5 8.5a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v.938l.4 1.599a1 1 0 0 1-.416 1.074l-.93.62a1 1 0 0 1-1.109 0l-.93-.62a1 1 0 0 1-.415-1.074l.4-1.599V8.5zm2 .938V8.5h-1v.938a1 1 0 0 1-.03.243l-.4 1.598.93.62.93-.62-.4-1.598a1 1 0 0 1-.03-.243z"/>
                                </svg>{{ $subir->file }}</h1>
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
