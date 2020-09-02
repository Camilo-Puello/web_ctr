<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head><meta charset="euc-jp">
    <!-- Required meta tags -->
    
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
               
             

           
          
          <div class="container" style="margin-top: 3%;">
            <div class="row">
            @foreach($encuesta as $questionnaire)
              <div class="col-md-12">
             
                <div class="card">

                  <div class="card-header" style="text-align:center"><strong>{{ $questionnaire->tittle }}</strong></div>

                  <div class="card-body" style="text-align:center;"><a class="btn btn-dark" href="/questionnaire/{{ $questionnaire->id }}/questions/create">Añadir preguntas</a></div>

                </div>
              </div>
              
                <div class="col-md-12" >
                  
                  <div  >
                  @foreach($questionnaire->questions as $question)
                 
                 <div class="card" style=" margin-top: 5%; width: 287px; float: left; margin-right: 1%;" >
                 
                   <div class="card-header"><strong>{{ $question->question }}</strong></div>
                  
                     <div class="card-body">
                       <ul class="list-group">
                           @foreach ($question->answers as $answer)
               
                           <label for="{{ $answer->answer }}">
                             <li class="list-group-item d-flex justify-content-between">
                               <input type="hidden" id="answer{{ $answer->id }}" value="{{ $answer->id }}" class="mr-2">
                               {{ $answer->answer }}
                               @if ($question->responses->count())
                                   <div>{{ intval(($answer->responses->count() * 100) / $question->responses->count()) }}% = {{ $answer->responses->count() }} votos </div>
                               @endif
                             </li>
                           </label>
                               
                           @endforeach
                       </ul>
                     </div>
                     
                     <div class="card-footer">

                     <a href="{{ route('question.edit', $question->id)}}" style="float: left;">
                         <button type="button" class="btn btn-primary btn-sm">
                          <svg class="bi bi-pencil" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="margin-top: -5px;">
                          <path fill-rule="evenodd" d="M11.293 1.293a1 1 0 0 1 1.414 0l2 2a1 1 0 0 1 0 1.414l-9 9a1 1 0 0 1-.39.242l-3 1a1 1 0 0 1-1.266-1.265l1-3a1 1 0 0 1 .242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z"/>
                          <path fill-rule="evenodd" d="M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 0 0 .5.5H4v.5a.5.5 0 0 0 .5.5H5v.5a.5.5 0 0 0 .5.5H6v-1.5a.5.5 0 0 0-.5-.5H5v-.5a.5.5 0 0 0-.5-.5H3z"/>
                          </svg>
                        </button>
                      </a>


                       <form action="/questionnaire/{{ $questionnaire->id }}/questions/{{ $question->id }}" method="post">
                         @method('DELETE')
                         @csrf                           
                         <button type="button" class="btn btn-danger btn-sm" style="float: left; margin-left: 5%;">
                           <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                           <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                           <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                           </svg>
                          </button>
                       </form>                     
                        
                     </div>  
                                     
                 </div> 
                 @endforeach  
                 @endforeach                 
               

                  </div>
    
                </div>
                 
                      
              
                    
               
              </div>
            </div>
          

              
               
          </div>
      </div>
    </div>
  </body>
</html>
