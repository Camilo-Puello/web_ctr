<div class="container" style="margin-top: 5%;">
        <div class="rom">

            <div class="card">
               <div class="card-header bg-primary" style="color: #fff;">
                    Datos del Lider
                </div>
                <div class="card-body">

                    @include('includes.errors')

                    <div class="row">
                    <div class="col-md-6  form-group">        
                    {{ Form::label('name', 'Nombre del onductor') }}
                    {{ Form::text('name', null, ['class' => 'form-control']) }}


                </div>

                <div class="col-md-6  form-group">        
                    {{ Form::label('coop', 'Nombre de la Cooperativa') }}
                    {{ Form::text('coop', null, ['class' => 'form-control']) }}

                </div>  

                <div class="col-md-12">
                    <div class="form-group">
                        {{ Form::label('candidato', 'Nombre del Candidato') }}
                        {{ Form::text('candidato', null, ['class' => 'form-control']) }}
                    </div>

                </div>              



                <div class="col-md-6">
                    <div class="form-group">
                        {{ Form::label('desxripcion', 'Describa brevemente el porque elige al individuo') }}
                        {{ Form::textarea('desxripcion', null, ['class' => 'form-control']) }}
                    </div>

                </div>



                    </div>                
                  
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12" style="margin-top: 2%;">
        <div class="form-group">
        {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
        </div>

    </div>

