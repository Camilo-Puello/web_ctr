<div class="container" style="margin-top: 5%;">
    <div class="row">
        <div class="col-md-6">
        <div class="card">
          <div class="card-header bg-primary" style="color:#fff; text-align: center; font-weight: bold;"></div>
           <div class="card-body">
               <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                          {{ Form::label('tittle', 'Título de encuesta') }}
                          {{ Form::text('tittle', null, ['class' => 'form-control']) }}

                        @error('tittle')
                          <small class="text-danger">{{ $message }}</small>
                        @enderror

                        </div>

                    </div>


                    <div class="col-md-8">
                        <div class="form-group">
                          {{ Form::label('purpose', '¿Por qué el usuario debería votar?') }}
                         {{ Form::text('purpose', null, ['class' => 'form-control']) }}
                         
                         @error('purpose')
                            <small class="text-danger">{{ $message }}</small>
                         @enderror

                        </div> 


                    </div>                     
              
                </div>
            </div>           
            </div>

            <div class="form-group" style="margin-top: 3%;">
                {{ Form::submit('Crear encuesta', ['class' => 'btn btn-sm btn-primary']) }}
            </div>

        </div>

</div>





