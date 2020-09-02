<div class="container" style="margin-top: 5%;">
        <div class="rom">

            <div class="card">
               <div class="card-header bg-primary" style="color: #fff;">
                    Datos de la Empresa
                </div>
                @include('includes.errors')
                <div class="card-body">

                    <div class="row">
                    <div class="col-md-6  form-group">        
                    {{ Form::label('name', 'Nombre de la Empresa') }}
                    {{ Form::text('name', null, ['class' => 'form-control']) }}


                </div>

                <div class="col-md-6  form-group">        
                    {{ Form::label('dir', 'Dirección') }}
                    {{ Form::text('dir', null, ['class' => 'form-control']) }}

                </div>  

                <div class="col-md-6">
                    <div class="form-group">
                        {{ Form::label('telefono', 'Contacto 1') }}
                        {{ Form::text('telefono', null, ['class' => 'form-control']) }}
                    </div>

                </div>


                <div class="col-md-6">
                    <div class="form-group">
                        {{ Form::label('cel', 'Contacto 2') }}
                        {{ Form::text('cel', null, ['class' => 'form-control']) }}
                    </div>

                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        {{ Form::label('correo', 'Correo') }}
                        {{ Form::text('correo', null, ['class' => 'form-control']) }}
                    </div>

                </div>

                <div class="col-md-6">
                    <div class="form-group" >
                        <div style="background-color: #2499e3; width: 170px; height: 40px; position: relative; border-radius: 5px; box-shadow: 0px 3px 0px #1a71a9; padding-top: 10px;">
                            <div class="col-md-3">
                                 <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cloud-arrow-up-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg"  style="text-align: center; color: #fff; font-size: 27px;">
                                 <path fill-rule="evenodd" d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2zm2.354 5.146l-2-2a.5.5 0 0 0-.708 0l-2 2a.5.5 0 1 0 .708.708L7.5 6.707V10.5a.5.5 0 0 0 1 0V6.707l1.146 1.147a.5.5 0 0 0 .708-.708z"/>
                                 </svg>
                            </div>
                            <div class="col-md-9" style=" width: auto; margin-top: -25px; margin-left: 20px; ">
                                <p style="text-align: center; color: #fff; ">
                                  Subir logo
                            </div>
                                                                       
                            <input style="position: absolute; top: 0px; left: 0px; right: 0px; bottom: 0px; width: 100%; height: 100%; opacity: 0; " type="file" name="logo">
                
                        </div>
                       
                    </div>

                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        {{ Form::label('descripcion', 'Descripcion') }}
                        {{ Form::textarea('descripcion', null, ['class' => 'form-control']) }}
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
