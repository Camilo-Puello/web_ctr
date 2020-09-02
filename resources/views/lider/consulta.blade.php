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

                <!-- /seccion lista de lider -->
                   <div class="col-md-12" style="margin-top: 5%;">
                      <div class="card card-primary card-outline" >
                        <div class="card-header">
                          <div class="row">
                          <div class="col-md-12">
                         
                              <h3 class="card-title"> <i class="ion ion-clipboard mr-1"></i>Lista de Lideres</h3>

                           </div>

                         
                               <!--======Buscador======-->
                               <div class="col-md-12">
                                 <form >
                                     <div class="input-group input-group-sm" >
                                       <input class="form-control" type="search" placeholder="Buscar" aria-label="Search" name="search">
                                       <div class="input-group-append">
                                         <button class="btn btn-primary" type="submit">
                                         <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="margin-top: -5px;">
                                           <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                                           <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                                         </svg>
                                         </button>
                                       </div>
                                     </div>
                                 </form>
                               </div>                           
                         
                               <!-- /.card-tools -->
                               <div class="col-md-12">
                                   <!--================Mensaje Resultado de la busqueda =================-->
                                   <div class="container">
                                      <div class="row">
                                          <div class="col-sm-12"  style="margin-top: 3%;">
                                              <h6>
                                                  @if($query)
                                                  <div class="alert alert-primary" role="alert">
                                                      El resutado de la busqueda '{{ $query }}' es:
                                                  </div>
                                                  @endif                        
                                          </div>
                                      </div>
                                    </div>

                                     <!--==========Mensaje =========-->
                                     @if(session('info'))
                                     <div class="container">
                                         <div class="row">
                                             <div class="col-md-8 col-md-offset-2">
                                                 <div class="alert alert-success">
                                                     {{ session('info') }}
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                     @endif
                               </div>

                          </div>
                          
                        @foreach($repetido as $item)
                        <h1>{{ $item->candidato }}</h1>
                        
                        @endforeach
                         </div>                              
                        
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                          <div class="direct-chat-messages">
                                 <!--================lista edicion, ver y borrar empresa =================-->
                                 <div style="border: 1px solid rgb(228, 228, 228);">
                                   <div class="container">
                                       <div class="row">
                                           <div class="col-md-12">
                                             <table class="table-responsive-xl">                                         
                                                 <table class="table table-striped table-hover">
                                                     <thead>
                                                     <tr>
                                                       <th>ID</th>                                                       
                                                       <th>Cooperativa</th>
                                                       <th>Candidato</th>
                                                       <th>Descripcion</th>                                                        
                                                                                                              
                                                      </tr>
                                                     </thead>
                                                     <tbody>
                                                    
                                                     @foreach ($repetido as $item)
                                                         <tr>
                                                         <td>{{ $item->id }}</td>
                                                          <td>{{ $item->coop }}</td>
                                                          <td>{{ $item->candidato }}</td>
                                                          <td>{{ $item->desxripcion }}</td>                                          
                                                         
                                                         </tr>
                                                         @endforeach
                                                       
                                                     </tbody>
                                                 </table>                                            
                                                 {{$consulta->links()}}
                                               </table>
                                          </div>
                                       </div>
                                   </div>
                                 </div> 
                                 <!--================Fin lista edicion, ver y borrar empresa =================-->
                             </div>                        
                           </div>
                           <!-- /.col -->
                         </div>
                        <!--Fin row -->
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
