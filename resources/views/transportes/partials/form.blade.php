<div class="container" style="margin-top: 5%;">
        <div class="rom">

            <div class="card">
               <div class="card-header bg-primary" style="color: #fff;">
                    Datos del Personales
                </div>
                @include('includes.errors')
                <div class="card-body">

                  <div class="row">
                    <div class="col-md-6  form-group">        
                    {{ Form::label('name', 'Nombre') }}
                    {{ Form::text('name', null, ['class' => 'form-control']) }}


                    </div>

                <div class="col-md-6  form-group">        
                    {{ Form::label('apellido', 'Apellido') }}
                    {{ Form::text('apellido', null, ['class' => 'form-control']) }}

                </div>  

                <div class="col-md-4">
                    <div class="form-group">
                    {{ Form::label('sex', 'Sexo') }}
                        <select name="sex" class="form-control" required id="sex">
                            <option value="selected">----</option>
                            <option value="M">Masculino</option>
                            <option value="F">Femenino</option>
                            
                        </select>
                    </div>

                </div>


                <div class="col-md-4">
                    <div class="form-group">
                        {{ Form::label('lugar_nac', 'Lugar de Nacimiento') }}
                        {{ Form::text('lugar_nac', null, ['class' => 'form-control']) }}
                    </div>

                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        {{ Form::label('f_nac', 'Fecha de Nacimiento') }}
                        {{ Form::date('f_nac', null, ['class' => 'form-control']) }}
                    </div>

                </div>

                <div class="col-md-6">
                    <div class="form-group">
                    {{ Form::label('estado_civil', 'Estado civil') }}
                        <select name="estado_civil" class="form-control" required id="estado_civil">
                            <option value="selected">Estado civil</option>
                            <option value="Soltero">Soltero</option>
                            <option value="Casado">Casado</option>
                            <option value="Divorciado">Divorciado</option>
                            <option value="Separado">Separado</option>
                            
                        </select>
                    </div>

                </div>

              

                <div class="col-md-6">
                       <div class="form-group" >
                       {{ Form::label('logo', 'Foto de perfil de usario') }}
                           <div style="background-color: #2499e3; width: 170px; height: 40px; position: relative; border-radius: 5px; box-shadow: 0px 3px 0px #1a71a9; padding-top: 10px;">
                               <div class="col-md-3">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cloud-arrow-up-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg"  style="text-align: center; color: #fff; font-size: 27px;">
                                    <path fill-rule="evenodd" d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2zm2.354 5.146l-2-2a.5.5 0 0 0-.708 0l-2 2a.5.5 0 1 0 .708.708L7.5 6.707V10.5a.5.5 0 0 0 1 0V6.707l1.146 1.147a.5.5 0 0 0 .708-.708z"/>
                                    </svg>
                               </div>
                               <div class="col-md-9" style=" width: auto; margin-top: -25px; margin-left: 20px; ">
                                   <p style="text-align: center; color: #fff; ">
                                    Subir foto
                               </div>
                                                                          
                               <input style="position: absolute; top: 0px; left: 0px; right: 0px; bottom: 0px; width: 100%; height: 100%; opacity: 0; " type="file" name="logo">
                   
                           </div>
                          
                       </div>

                </div>



                    </div>                
                  
                </div>
            </div>
        </div>
    </div>


    <div class="container" style="margin-top: 3%;">
        <div class="rom">

            <div class="card">
               <div class="card-header bg-primary" style="color: #fff;">
                    Documentos
                </div>
                <div class="card-body">

                    <div class="row">
                    <div class="col-md-6  form-group">        
                    {{ Form::label('tipo_doct', 'Tipo de Documento') }}
                        <select name="tipo_doct" class="form-control" required id="tipo_doct">
                            <option value="selected">-----</option>
                            <option value="CC">Cedula</option>
                            <option value="PA">Pasaporte</option>
                            <option value="CE">Cedula de extranjeria</option>                           
                            <option value="CD">Carnet diplomatico</option>
                            <option value="TI">TI2</option>
            
                        </select>


                </div>

                <div class="col-md-6">
                    <div class="form-group">        
                      {{ Form::label('num_doct', 'Numero de Documento') }}
                      {{ Form::text('num_doct', null, ['class' => 'form-control']) }}
                    </div>

                </div>  

                <div class="col-md-4">
                    <div class="form-group">
                    {{ Form::label('tipo_lic', 'Tipo de Licencia de Conduccion') }}
                        <select name="tipo_lic" class="form-control" required id="tipo_lic">
                            <option value="selected">-----</option>
                            <option value="A1">Cetegoria A1</option>
                            <option value="A2">Cetegoria A2</option>
                            <option value="B1">Cetegoria B1</option>                           
                            <option value="B2">Cetegoria B2</option>
                            <option value="B3">Cetegoria B3</option>
                            <option value="C1">Cetegoria C1</option>
                            <option value="C2">Cetegoria C2</option>
                            <option value="C3">Cetegoria C3</option>           
                        </select>
                    </div>

                </div>


                <div class="col-md-4">
                    <div class="form-group">
                        {{ Form::label('num_lic', 'Numero de Licencia') }}
                        {{ Form::text('num_lic', null, ['class' => 'form-control']) }}
                    </div>

                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        {{ Form::label('f_vencimiento', 'Fecha de Vencimiento') }}
                        {{ Form::date('f_vencimiento', null, ['class' => 'form-control']) }}
                    </div>

                </div>

                <div class="col-md-6">                    
                    <div class="form-group">
                        {{ Form::label('num_libret_t', 'Numero de Libreta Militar') }}
                        {{ Form::text('num_libret_t', null, ['class' => 'form-control']) }}
                    </div>
                    

                </div>

             

                <div class="col-md-6">
                       <div class="form-group" >
                       {{ Form::label('pasado_judicial', 'Subir Pasado Judicial') }}
                           <div style="background-color: #2499e3; width: 170px; height: 40px; position: relative; border-radius: 5px; box-shadow: 0px 3px 0px #1a71a9; padding-top: 10px;">
                               <div class="col-md-3">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cloud-arrow-up-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg"  style="text-align: center; color: #fff; font-size: 27px;">
                                    <path fill-rule="evenodd" d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2zm2.354 5.146l-2-2a.5.5 0 0 0-.708 0l-2 2a.5.5 0 1 0 .708.708L7.5 6.707V10.5a.5.5 0 0 0 1 0V6.707l1.146 1.147a.5.5 0 0 0 .708-.708z"/>
                                    </svg>
                               </div>
                               <div class="col-md-9" style=" width: auto; margin-top: -25px; margin-left: 30px; ">
                                   <p style="text-align: center; color: #fff; ">
                                    Subir Archivo
                               </div>
                                                                          
                               <input style="position: absolute; top: 0px; left: 0px; right: 0px; bottom: 0px; width: 100%; height: 100%; opacity: 0; " type="file" name="pasado_judicial">
                   
                           </div>
                          
                       </div>

                </div>



                    </div>                
                  
                </div>
            </div>
        </div>
    </div>



    <div class="container" style="margin-top: 3%;">
        <div class="rom">

            <div class="card">
               <div class="card-header bg-primary" style="color: #fff;">
                    Datos de Contacto
                </div>
                <div class="card-body">

                    <div class="row">
                    <div class="col-md-6  form-group">        
                    {{ Form::label('ciudad_recidencia', 'Ciudad de Residencia') }}
                    {{ Form::text('ciudad_recidencia', null, ['class' => 'form-control']) }}

                </div> 

                <div class="col-md-6  form-group">        
                    {{ Form::label('dir', 'Direccion de Residencia') }}
                    {{ Form::text('dir', null, ['class' => 'form-control']) }}

                </div>                  


                <div class="col-md-4">
                    <div class="form-group">
                        {{ Form::label('t_fijo', 'Telefono Fijo') }}
                        {{ Form::text('t_fijo', null, ['class' => 'form-control']) }}
                    </div>

                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        {{ Form::label('t_celular', 'Celular') }}
                        {{ Form::text('t_celular', null, ['class' => 'form-control']) }}
                    </div>

                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        {{ Form::label('correo', 'Correo electronico') }}
                        {{ Form::text('correo', null, ['class' => 'form-control']) }}
                    </div>

                </div>

                <div class="col-md-12">                    
                    <div class="form-group">
                        {{ Form::label('experiencia', 'Experiencia') }}
                        {{ Form::textarea('experiencia', null, ['class' => 'form-control']) }}
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
