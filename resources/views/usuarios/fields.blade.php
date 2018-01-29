
<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Nome:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Roles Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('role_id', 'Role:') !!}
        {!! Form::select('role_id', $roles, $role->role_id, ['id' => 'role_id', 'class' => 'form-control', 'dropdown-menu', 'placeholder'=>'Selecione a Role'])!!}
    </div>
{!! print_r ($role->user_id)!!}


<!-- Remember Token Field
<div class="form-group col-sm-6">
    {!! Form::label('remember_token', 'Remember Token:') !!}
    {!! Form::text('remember_token', null, ['class' => 'form-control']) !!}
</div>
-->

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('usuarios.index') !!}" class="btn btn-default">Cancelar</a>
</div>



