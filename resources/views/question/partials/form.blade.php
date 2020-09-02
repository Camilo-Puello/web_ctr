<div class="container">
    <div class="row">
    <h1>

    </h1>
        <div class="col-md-6">
        <div class="card mb-3"  style="margin-top: 5%;">
          <div class="card-header bg-primary" style="color:#fff; text-align: center; font-weight: bold;"></div>
           <div class="card-body">
               <div class="row">
                    <div class="col-md-8">

                        <div class="form-group">
                          <label for="question">¿Cuál es tu pregunta?</label>
                          <input name="question[question]" type="text" class="form-control" id="question" value="{{ old('question.question') }}" placeholder="Digita tu pregunta">

                        @error('question.question')
                          <small class="text-danger">{{ $message }}</small>
                        @enderror

                        </div>

                    </div>

                    <div class="container">
                       <div class="row">
                       <div class="col-md-12">
                       <div class="form-group">
                      <fieldset>
                          <legend>Opciones</legend>
                          <small id="opcionesHelp" class="form-text text-muted">Dar opciones que le brinden la mayor comprensión de las preguntas</small>
  
                        
                          <div class="form-group">
                            <label for="answer1">Opción 1</label>
                            <input name="answers[][answer]" type="text" class="form-control" value="{{ old('answers.0.answer') }}" id="answer1" placeholder="Digite la opción 1" aria-describedby="opcionesHelp">
  
  
                          @error('answers.0.answer')
                            <small class="text-danger">{{ $message }}</small>
                          @enderror
  
                          </div>
  
                          <div class="form-group">
                            <label for="answer2">Opción 2</label>
                            <input name="answers[][answer]" type="text" class="form-control" value="{{ old('answers.1.answer') }}" id="answer2" placeholder="Digite la opción 2" aria-describedby="opcionesHelp">
  
  
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
            </div>


        </div>

</div>





