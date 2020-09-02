<div class="container" style="margin-top: 5%;">
    <div class="row">
        <div class="col-md-6">
        <div class="card">
          <div class="card-header bg-primary" style="color:#fff; text-align: center; font-weight: bold;">Datos del Propietario</div>
          @include('includes.errors')
           <div class="card-body">
               <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                          {{ Form::label('name', 'Nombre deL Propietario') }}
                          {{ Form::text('name', null, ['class' => 'form-control']) }}
                        </div>

                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                          {{ Form::label('doc_pro', 'Documento') }}
                          {{ Form::text('doc_pro', null, ['class' => 'form-control']) }}
                        </div>

                    </div>

                    <div class="col-md-8">
                        <div class="form-group">
                          {{ Form::label('tenedor', 'Tenedor Actual') }}
                         {{ Form::text('tenedor', null, ['class' => 'form-control']) }}
                        </div> 

                    </div>

                    <div class="col-md-4">
                       <div class="form-group">
                             {{ Form::label('doc_ten', 'Documento') }}
                             {{ Form::text('doc_ten', null, ['class' => 'form-control']) }}
                       </div>

                    </div>

                    <div class="col-md-8">
                        <div class="form-group">
                             {{ Form::label('conductor', 'Conductor Actual') }}
                             {{ Form::text('conductor', null, ['class' => 'form-control']) }}
                        </div>

                    </div>                      

                    <div class="col-md-4">
                    <div class="form-group">
                             {{ Form::label('telef', 'Telefono') }}
                             {{ Form::text('telef', null, ['class' => 'form-control']) }}
                    </div>

                    </div>

               </div>            

             <div class="form-group">
                 {{ Form::label('trans', 'Transportadora') }}
                 {{ Form::text('trans', null, ['class' => 'form-control']) }}
             </div>

             <div class="form-group">
                 {{ Form::label('afiliado', 'Afiliado a:') }}
                 {{ Form::text('afiliado', null, ['class' => 'form-control']) }}
             </div>
              
            </div>
        </div>

        </div>

        <div class="col-md-6">
        <div class="card">
          <div class="card-header bg-primary" style="color:#fff; text-align: center; font-weight: bold;">Datos del Vehiculo</div>
           <div class="card-body">
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                          {{ Form::label('placa', 'Numero de Placa') }}
                          {{ Form::text('placa', null, ['class' => 'form-control']) }}
                        </div>

                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                          {{ Form::label('clase', 'Clase') }}
                          {{ Form::text('clase', null, ['class' => 'form-control']) }}
                        </div>

                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                          {{ Form::label('marca', 'Marca') }}
                         {{ Form::text('marca', null, ['class' => 'form-control']) }}
                        </div> 

                    </div>

                    <div class="col-md-6">
                       <div class="form-group">
                             {{ Form::label('modelo', 'Modelo') }}
                             {{ Form::text('modelo', null, ['class' => 'form-control']) }}
                       </div>

                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                             {{ Form::label('tipo', 'Tipo') }}
                             {{ Form::text('tipo', null, ['class' => 'form-control']) }}
                        </div>

                    </div>                      

                    <div class="col-md-6">
                        <div class="form-group">
                                 {{ Form::label('color', 'Color') }}
                                 {{ Form::text('color', null, ['class' => 'form-control']) }}
                        </div>

                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                                 {{ Form::label('linea', 'Linea') }}
                                 {{ Form::text('linea', null, ['class' => 'form-control']) }}
                        </div>

                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                                 {{ Form::label('motor', 'Motor') }}
                                 {{ Form::text('motor', null, ['class' => 'form-control']) }}
                        </div>

                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                           {{ Form::label('chasis', 'Chasis') }}
                           {{ Form::text('chasis', null, ['class' => 'form-control']) }}
                        </div>

                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                           {{ Form::label('capacidad', 'Capacidad') }}
                           {{ Form::text('capacidad', null, ['class' => 'form-control']) }}
                        </div>

                    </div>

               </div>            

                       
              
            </div>
        </div>

        </div>

        <div class="col-md-12" style="margin-top: 3%;">
        <div class="card">
          <div class="card-header bg-primary" style="color:#fff; text-align: center; font-weight: bold;">Documentación del Vehiculo</div>
           <div class="card-body">
               <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                          {{ Form::label('manifiesto', 'Manifiesto') }}
                          {{ Form::text('manifiesto', null, ['class' => 'form-control']) }}
                        </div>

                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                          {{ Form::label('ciudad', 'Ciudad') }}
                          {{ Form::text('ciudad', null, ['class' => 'form-control']) }}
                        </div>

                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                          {{ Form::label('fecha', 'Fecha') }}
                         {{ Form::date('fecha', null, ['class' => 'form-control']) }}
                        </div> 

                    </div>

                    <div class="col-md-4">
                       <div class="form-group">
                             {{ Form::label('r_carga', 'Registro Nacional de Carga') }}
                             {{ Form::text('r_carga', null, ['class' => 'form-control']) }}
                       </div>

                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                             {{ Form::label('tarjeta_p', 'Tarjeta de Propiedad') }}
                             {{ Form::text('tarjeta_p', null, ['class' => 'form-control']) }}
                        </div>

                    </div>                      

                    <div class="col-md-4">
                        <div class="form-group">
                                 {{ Form::label('r_combustible', 'Registro de Combustible') }}
                                 {{ Form::text('r_combustible', null, ['class' => 'form-control']) }}
                        </div>

                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                                 {{ Form::label('tarjeta_re', 'Tarjeta de Remolque') }}
                                 {{ Form::text('tarjeta_re', null, ['class' => 'form-control']) }}
                        </div>

                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                                 {{ Form::label('placa_re', 'Placa de Remolque') }}
                                 {{ Form::text('placa_re', null, ['class' => 'form-control']) }}
                        </div>

                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                                 {{ Form::label('num_ejes', 'Numero de Ejes') }}
                                 {{ Form::text('num_ejes', null, ['class' => 'form-control']) }}
                        </div>

                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                                 {{ Form::label('marc', 'Marca del Remolque') }}
                                 {{ Form::text('marc', null, ['class' => 'form-control']) }}
                        </div>

                    </div>

                    <div class="col-md-12">
                         <hr style="height: 1px; background-color: #207ce5;">

                    </div>

                    <div class="col-md-8">
                        <div class="form-group">
                                 {{ Form::label('tecno_m', 'Revision Tecnicomecanica') }}
                                 {{ Form::text('tecno_m', null, ['class' => 'form-control']) }}
                        </div>

                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                                 {{ Form::label('venci', 'Vencimiento') }}
                                 {{ Form::date('venci', null, ['class' => 'form-control']) }}
                        </div>

                    </div>

                    <div class="col-md-8">
                        <div class="form-group">
                                 {{ Form::label('cer_gases', 'Certificado de Gases') }}
                                 {{ Form::text('cer_gases', null, ['class' => 'form-control']) }}
                        </div>

                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                                 {{ Form::label('vto', 'Vencimiento') }}
                                 {{ Form::date('vto', null, ['class' => 'form-control']) }}
                        </div>

                    </div>

                    <div class="col-md-12">
                         <hr style="height: 1px; background-color: #207ce5;">

                    </div>

                    

                    <div class="col-md-8">
                        <div class="form-group">
                                 {{ Form::label('seg_obli', 'Seguro Oblogatorio') }}
                                 {{ Form::text('seg_obli', null, ['class' => 'form-control']) }}
                        </div>

                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                                 {{ Form::label('vence', 'Vencimiento') }}
                                 {{ Form::date('vence', null, ['class' => 'form-control']) }}
                        </div>

                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                                 {{ Form::label('compa_sec', 'Compañia de Seguro') }}
                                 {{ Form::text('compa_sec', null, ['class' => 'form-control']) }}
                        </div>

                    </div>

                    <div class="col-md-12">
                         <hr style="height: 1px; background-color: #207ce5;">

                    </div>
                    

                    <div class="col-md-8">
                        <div class="form-group">
                                 {{ Form::label('seg_contra', 'Seguro Contractual') }}
                                 {{ Form::text('seg_contra', null, ['class' => 'form-control']) }}
                        </div>

                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                                 {{ Form::label('ven', 'Vencimiento') }}
                                 {{ Form::date('ven', null, ['class' => 'form-control']) }}
                        </div>

                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                                 {{ Form::label('compa_cont', 'Compañia de Seguro') }}
                                 {{ Form::text('compa_cont', null, ['class' => 'form-control']) }}
                        </div>

                    </div>

                    <div class="col-md-12">
                         <hr style="height: 1px; background-color: #207ce5;">

                    </div>

                    
                    <div class="col-md-8">
                        <div class="form-group">
                                 {{ Form::label('seg_extra', 'Seguro Extracontractual') }}
                                 {{ Form::text('seg_extra', null, ['class' => 'form-control']) }}
                        </div>

                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                                 {{ Form::label('venc', 'Vencimiento') }}
                                 {{ Form::date('venc', null, ['class' => 'form-control']) }}
                        </div>

                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                                 {{ Form::label('compa_extra', 'Compañia de Seguro') }}
                                 {{ Form::text('compa_extra', null, ['class' => 'form-control']) }}
                        </div>

                    </div>

                   
                    <div class="col-md-12">
                       <div class="form-group" >
                       {{ Form::label('Images', 'Fotos de vehículo') }}
                           <div style="background-color: #2499e3; width: 170px; height: 40px; position: relative; border-radius: 5px; box-shadow: 0px 3px 0px #1a71a9; padding-top: 10px;">
                               <div class="col-md-3">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cloud-arrow-up-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg"  style="text-align: center; color: #fff; font-size: 27px;">
                                    <path fill-rule="evenodd" d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2zm2.354 5.146l-2-2a.5.5 0 0 0-.708 0l-2 2a.5.5 0 1 0 .708.708L7.5 6.707V10.5a.5.5 0 0 0 1 0V6.707l1.146 1.147a.5.5 0 0 0 .708-.708z"/>
                                    </svg>
                               </div>
                               <div class="col-md-9" style=" width: auto; margin-top: -25px; margin-left: 20px; ">
                                   <p style="text-align: center; color: #fff; ">
                                     Foto frontal
                               </div>
                                                                          
                               <input style="position: absolute; top: 0px; left: 0px; right: 0px; bottom: 0px; width: 100%; height: 100%; opacity: 0; " type="file" name="image_1">
                   
                           </div>
                          
                       </div>

                </div>

                <div class="col-md-12">
                       <div class="form-group" >
                           <div style="background-color: #2499e3; width: 170px; height: 40px; position: relative; border-radius: 5px; box-shadow: 0px 3px 0px #1a71a9; padding-top: 10px;">
                               <div class="col-md-3">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cloud-arrow-up-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg"  style="text-align: center; color: #fff; font-size: 27px;">
                                    <path fill-rule="evenodd" d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2zm2.354 5.146l-2-2a.5.5 0 0 0-.708 0l-2 2a.5.5 0 1 0 .708.708L7.5 6.707V10.5a.5.5 0 0 0 1 0V6.707l1.146 1.147a.5.5 0 0 0 .708-.708z"/>
                                    </svg>
                               </div>
                               <div class="col-md-9" style=" width: auto; margin-top: -25px; margin-left: 20px; ">
                                   <p style="text-align: center; color: #fff; ">
                                     Foto lateral
                               </div>
                                                                          
                               <input style="position: absolute; top: 0px; left: 0px; right: 0px; bottom: 0px; width: 100%; height: 100%; opacity: 0; " type="file" name="image_2">
                   
                           </div>
                          
                       </div>

                </div>

               </div>                     
              
            </div>
        </div>



        </div>

    </div>

    <div class="form-group" style="margin-top: 3%;">
        {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
    </div>

</div>




