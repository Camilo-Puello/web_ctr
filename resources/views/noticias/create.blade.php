<!--@extends('layouts.admin_role')-->
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
                    
                    <a class="navbar-brand" href="/home">Inicio</a>

                    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                          <a class="nav-link" href="#"> <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="/posts">Noticias</a>
                        </li>

                      </ul>

                      <ul>
                        <li class="nav-item collapse navbar-collapse" id="navbarTogglerDemo03">
                            <a  class="nav-link" href="#"> <strong>{{ Auth::user()->name }}</strong> </a>
                          </li>
                      </ul>
                    </div>
                  </nav>


                  <div class="row">
                  <div class="col-md-12">
                    <div class="panel panel-content">              
            
                
            
                        <form action="/posts" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="col-md-12">
                               <div class="form group">
                                   <label for="tittle">Título</label>
                                   <input type="text" name="tittle" class="form-control" id="tittle" placeholder="Título..." value="{{ old('tittle') }}">
                               </div>

                            </div>

                           

                            <div class="col-md-12">
                              <div class="form-group">
                                  {{ Form::label('post_content', 'Historia') }}
                                  {{ Form::textarea('post_content', null, ['class' => 'form-control']) }}
                              </div>

                            </div>        
                         
                           
            
                            <div class="col-md-12">
                                   <div class="form-group" >
                                   <label for="image">Selecciona la imagen</label>
                                       <div style="background-color: #2499e3; width: 170px; height: 40px; position: relative; border-radius: 5px; box-shadow: 0px 3px 0px #1a71a9; padding-top: 10px;">
                                           <div class="col-md-3">
                                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cloud-arrow-up-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg"  style="text-align: center; color: #fff; font-size: 27px;">
                                                <path fill-rule="evenodd" d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2zm2.354 5.146l-2-2a.5.5 0 0 0-.708 0l-2 2a.5.5 0 1 0 .708.708L7.5 6.707V10.5a.5.5 0 0 0 1 0V6.707l1.146 1.147a.5.5 0 0 0 .708-.708z"/>
                                                </svg>
                                           </div>
                                           <div class="col-md-9" style=" width: auto; margin-top: -25px; margin-left: 27px; ">
                                               <p style="text-align: center; color: #fff; ">
                                                 Subir imagen
                                           </div>
                                                                                      
                                           <input style="position: absolute; top: 0px; left: 0px; right: 0px; bottom: 0px; width: 100%; height: 100%; opacity: 0; " type="file" name="image"  id="image" value="{{ old('image_url') }}">
                               
                                       </div>
                                      
                                   </div>
            
                            </div>

                            <div class="col-md-12">
                               <div class="form group pt-2">
                                   <input class="btn btn-primary" type="submit" value="Publicar">
                               </div>

                            </div>
            
                            


                        </form>              

                </div>

            </div>

      </div>             
        
    </div>

    
</body>
</html>








   

