<!doctype html>
<html lang="{{ app()->getLocale() }}">

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
            <div class="col-md-2">

            </div>          
             <div class="col-md-7" >
                
                <div class="card" style="margin-top: 5%;" >
                  <div class="card-header bg-primary" style="color:#fff; text-align: center; font-weight: bold;">{{ $questionnaire->tittle }}</div>
                   <div class="card-body" style="padding: 3%;">
                    @if(count($questionnaire->questions) > 0)                           
                        
                            <form action="/surveys/{{ $questionnaire->id }}-{{ Str::slug($questionnaire->tittle) }}" method="POST">
                                    @csrf
    
                                    @foreach ($questionnaire->questions as $key => $question)
    
                                    <div class="card mt-4" style=" margin-top: 3%; width: 287px; float: left; margin-right: 1%;">
                                        <div class="card-header"><strong>{{ $key + 1 }}</strong><strong>. {{ $question->question }}</strong></div>
    
                                        <div class="card-body">
    
                                            @error('responses.' . $key . '.answer_id')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
    
                                            <ul class="list-group">
                                                @foreach ($question->answers as $answer)
                                                    <label for="answer{{ $answer->id }}">
                                                        <li class="list-group-item">
                                                            <input type="hidden" name="responses[{{ $key }}][question_id]" value="{{ $question->id }}">
                                                            <input type="radio" name="responses[{{ $key }}][answer_id]" id="answer{{ $answer->id }}" value="{{ $answer->id }}" {{ (old('responses.' . $key . '.answer_id') == $answer->id) ? 'checked' : '' }} class="mr-2">
                                                            {{ $answer->answer }}
                                                        </li>
                                                    </label>
                                                @endforeach
                                            </ul>
                                            
                                        </div>

                                    </div>
                                    @endforeach   
                    
                  </div>
                    
                </div>

                
                            <div class="card mt-4">
                                  <div class="card-header"><strong>Información</strong></div>
                                    <div class="card-body">
                                          <div class="form-group">
                                            <label for="name">Nombre</label>
                                            <input type="name" name="survey[name]" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Nombre"/>
                                            @error('survey.name')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                          </div>
                        
                                        <div class="form-group">
                                            <label for="email">Correo electrónico</label>
                                            <input type="email" name="survey[email]" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Correo electrónico">
                                            <small id="emailHelp" class="form-text text-muted">Tus datos no serán usados con otro fin.</small>
                                            @error('survey.email')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                            </div>
                            
                          </div>

                            <div class="form-group" style="margin-top: 1%; text-align:center;  margin-right: 10%;">
                                    {{ Form::submit('Responder', ['class' => 'btn btn-sm btn-primary']) }}
                            </div>                
                    
                        </form>         

            </div>

            @else
                     
               <div class="card-header">
                   <div class="card-body"><h3 style="text-align: center; color:#C3C3C3">Aún no hay preguntas</h3></div>
               </div>
     
            @endif





        
    </div>
    <div class="col-md-1">

            </div>  
</body>
</html>
