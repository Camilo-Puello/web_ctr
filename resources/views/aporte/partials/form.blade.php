<div class="container" style="margin-top: 5%; margin-bottom: 3%;">

<div class="card border-primary" >
    <div class="card-header border-primary text-center">
        <h4  style="color:#6345fe">Formulario Propuesta</h4>

    </div>

<div class="card-body border-primary" style="color:#6345fe">

        <h5 class="card-title" style="color: #6345fe;">Datos Personales</h5>

<div class="form-group">
    {{ Form::label('name', 'Nombre Completo') }}
    {{ Form::text('name', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    <div class="row">
        <div class="col-md-3">
            {{ Form::label('tipo', 'Tipo') }}
            <select name="tipo" class="form-control" required id="tipo">
                <option value="selected">-----</option>
                <option value="C">Cedula</option>
                <option value="P">Pasaporte</option>
                <option value="E">Cedula de extranjeria</option>
                <option value="T">Tarjeta de identidad</option>
                <option value="D">Carnet diplomatico</option>
                <option value="O">TI2</option>
            </select>
        </div>
        <div class="col-md-3">

            <div class="form-group">
                {{ Form::label('doc', 'Identificación') }}
                {{ Form::text('doc', null, ['class' => 'form-control']) }}
            </div>

        </div>

        <div class="col-md-6">
            <div class="form-group">
                {{ Form::label('email', 'Email') }}
                {{ Form::text('email', null, ['class' => 'form-control']) }}
            </div>

        </div>
    </div>

    <div class="row">

        <div class="col-md-6">
            <div class="form-group">
                {{ Form::label('contacto1', 'Telefono') }}
                {{ Form::text('contacto1', null, ['class' => 'form-control']) }}
            </div>

        </div>

        <div class="col-md-6">
            <div class="form-group">
                {{ Form::label('contacto2', 'Celular') }}
                {{ Form::text('contacto2', null, ['class' => 'form-control']) }}
            </div>
        </div>



    </div>
</div>

<br>

<h5 class="card-title" style="color: #6345fe;">Datos de la Empresa</h5>
<span>Diligenciar estos datos si la propuesta se realiza como empresa</span>
<br>
<br>

<div class="form-group">
    {{ Form::label('empresa', 'Nombre legal de la Empresa') }}
    {{ Form::text('empresa', null, ['class' => 'form-control']) }}
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {{ Form::label('razon', 'Razon Social') }}
            {{ Form::text('razon', null, ['class' => 'form-control']) }}
        </div>

    </div>

    <div class="col-md-6">
        <div class="form-group">
            {{ Form::label('nit', 'Nit') }}
            {{ Form::text('nit', null, ['class' => 'form-control']) }}
        </div>

    </div>

</div>

<h5 class="card-title"  style="color: #6345fe;">Propuesta</h5>

<div class="form-group">
    {{ Form::label('descripcion', 'Descripcion propuesta') }}
    <textarea name="descripcion" class="form-control text-no-resize" rows="3" cols="15" id="descripcion" required maxlength="200"></textarea>

</div>

<div class="col-md-6">
    <div class="form-group" style="margin-left: -12px;">
        <div style="background-color: #2499e3; width: 170px; height: 40px; position: relative; border-radius: 5px; box-shadow: 0px 3px 0px #1a71a9; padding-top: 10px;">
            <div class="col-md-3">
                 <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cloud-arrow-up-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg"  style="text-align: center; color: #fff; font-size: 27px;">
                 <path fill-rule="evenodd" d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2zm2.354 5.146l-2-2a.5.5 0 0 0-.708 0l-2 2a.5.5 0 1 0 .708.708L7.5 6.707V10.5a.5.5 0 0 0 1 0V6.707l1.146 1.147a.5.5 0 0 0 .708-.708z"/>
                 </svg>
            </div>
            <div class="col-md-9" style=" width: auto; margin-top: -25px; margin-left: 20px; ">
                <p style="text-align: center; color: #fff; ">
                  Subir Pdf
            </div>
                                                       
            <input style="position: absolute; top: 0px; left: 0px; right: 0px; bottom: 0px; width: 100%; height: 100%; opacity: 0; " type="file" name="adjunto">

        </div>
       
    </div>

</div>



<div class="card-footer border-primary text-right">
    <div class="form-group">
        {{ Form::submit('Guardar', ['class' => 'cta_btn btn_1']) }}
    </div>
</div>

</div>



</div>



</div>



