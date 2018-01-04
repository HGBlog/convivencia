<!-- No Usuario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('no_usuario', 'No Usuario:') !!}
    {!! Form::text('no_usuario', null, ['class' => 'form-control']) !!}
</div>

<!-- No Pais Field -->
<div class="form-group col-sm-6">
    {!! Form::label('no_pais', 'No Pais:') !!}
    {!! Form::text('no_pais', null, ['class' => 'form-control']) !!}
</div>

<!-- No Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('no_email', 'No Email:') !!}
    {!! Form::email('no_email', null, ['class' => 'form-control']) !!}
</div>

<!-- No Sexo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('no_sexo', 'No Sexo:') !!}
    {!! Form::select('no_sexo', ['M' => 'Masculino', 'F' => 'Feminino'], null, ['class' => 'form-control']) !!}
</div>

<!-- Co Telefone Pais Field -->
<div class="form-group col-sm-6">
    {!! Form::label('co_telefone_pais', 'Co Telefone Pais:') !!}
    {!! Form::number('co_telefone_pais', null, ['class' => 'form-control']) !!}
</div>

<!-- Nu Telefone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nu_telefone', 'Nu Telefone:') !!}
    {!! Form::number('nu_telefone', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('perfilUsuarios.index') !!}" class="btn btn-default">Cancel</a>
</div>
