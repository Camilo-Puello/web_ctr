    <form action="{{ route('users.index') }}"  method="POST" enctype="multipart/form-data" >

        <div class="form-group">
            {{ Form::label('name', 'Nombre de Usuario') }}
            {{ Form::text('name', null, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('email', 'Correo Electronico') }}
            {{ Form::text('email', null, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('password', 'Contraseña') }}
            {{ Form::text('password', null, ['class' => 'focus-input100']) }}
        </div>

        <div class="form-group">
            {{ Form::label('password_confirmation', 'Confirmar Contraseña') }}
            {{ Form::text('password_confirmation', null, ['class' => 'focus-input100']) }}
        </div>

            <div class="form-group">
                {{ Form::label('avatar', 'Imagen') }}
                {{ Form::file('avatar') }}
            </div>
            <div>
                <small>selecione un archivo menor a 1500 KB</small>
            </div>


            <hr>

            <h3>Lista de Roles</h3>
            <div class="form-group">
                <ul class="list-unstyled">
                     @foreach ($roles as $role)
                <li>
                   <label>
                       {{ Form::checkbox('roles[]', $role->id, null) }}
                       {{ $role->name }}
                       <em>({{ $role->description ?: 'Sin descripcion' }})</em>


                    </label>
                </li>

                     @endforeach

                </ul>

                 </div>
                <hr>
                <div class="text-right">
                    <button type="submit" class="btn btn-primary">guardar</button>
                </div>
            </div>
        </div>
    </div>
</form>
<div id="kv-avatar-errors-1" class="center-block" style="width:800px;display:none"></div>









