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
                          <a class="nav-link" href="{{ route('questionnaire.index') }}">Encuestas</a>
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
                    {{ Form::model($fullQuestion, ['route' => ['question.update', $fullQuestion->id], 
                    'method' => 'PATCH' ]) }}

                <div class="container" style="margin-top: 5%;">
                  <div class="row">
                      <div class="col-md-6">
                        @if(session('info'))
                        <div class="container" >
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="alert alert-success">
                                        {{ session('info') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                      <div class="card">
                        <div class="card-header bg-primary" style="color:#fff; text-align: center; font-weight: bold;"></div>
                        <div class="card-body">
                            <div class="row">
                                  <div class="col-md-8">

                                      <div class="form-group">
                                        <label for="question">¿Cuál es tu pregunta?</label>


                                        <input name="question[question]" type="text" class="form-control" id="question" required value="{{ $fullQuestion->question }}" placeholder="Digita tu pregunta">

                                      @error('question.question')
                                        <small class="text-danger">{{ $message }}</small>
                                      @enderror

                                      </div>

                                  </div>
                                  
                                  <div class="form-group">
                                    <fieldset>
                                      <legend>Opciones</legend>
                                      <small id="opcionesHelp" class="form-text text-muted">Dar opciones que le brinden la mayor comprensión de las preguntas</small>



                                    
                                      <div class="form-group">
                                        <label for="answer1">Opción 1</label>
                                      <input name="answers[][answer]" type="text" class="form-control" value="{{$fullQuestion->answers[0]->answer}}" id="answer1" required placeholder="Digite la opción 1" aria-describedby="opcionesHelp">


                                      @error('answers.0.answer')
                                        <small class="text-danger">{{ $message }}</small>
                                      @enderror

                                      </div>

                                      <div class="form-group">
                                        <label for="answer2">Opción 2</label>
                                        <input name="answers[][answer]" type="text" class="form-control" value="{{$fullQuestion->answers[1]->answer}}" id="answer2" required placeholder="Digite la opción 2" aria-describedby="opcionesHelp">


                                      @error('answers.1.answer')
                                        <small class="text-danger">{{ $message }}</small>
                                      @enderror


                                    </fieldset>
                                  </div>
                            
                              </div>
                          </div>           
                          </div>


                      </div>

                </div>







                    <div class="form-group" style="margin-top: 3%;">
                        {{ Form::submit('Actualizar pregunta', ['class' => 'btn btn-sm btn-primary']) }}
                    </div>
        

                    {!! Form::close() !!}

                </div>

              </div>

              <div class="col-md-1">

              </div>


        </div>
    </div>
</body>
</html>
