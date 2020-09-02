<div class="form-group">
    {{ Form::label('name', 'Nombre del Role') }}
    {{ Form::text('name', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('description', 'Descripcion') }}
    {{ Form::text('description', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('slug', 'Url Amigable') }}
    {{ Form::text('slug', null, ['class' => 'form-control']) }}
</div>

<hr>

<h3>Permisos Especiales</h3>
<div class="form-group">
    <label> {{ Form::radio('especial', 'all-access') }} acesso total</label>
    <label> {{ Form::radio('especial', 'no-access') }}  ningun acesso</label>

</div>

<hr>

<h3>Lista de Permisos</h3>
<div class="form-group">
    <div class="table-responsive mailbox-messages" style="width: 80%;">
        <table class="table table-hover table-striped">

            <tbody>
                <tr>
                    <th>Escoger</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>           

                </tr>
                <tbody>
                @foreach ($permissions as $permission)  
                    <tr>
                        <td>{{ Form::checkbox('permissions[]', $permission->id, null) }}</td>
                        <td> {{ $permission->name }}</td>
                        <td> <em>({{ $permission->description ?: 'Sin descripcion' }})</em></td>                  
                   
                    </tr>
                    @endforeach
                </tbody>
                


            </tbody>          

        </table>
    </div>
</div>

<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>
