<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Nome:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'readonly']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control', 'readonly']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('mregiao_id', 'Macro-região') !!}
    {!! Form::select('mregiao_id', $macroregiaos, $usuario->mregiao_id, ['id' => 'mregiao_id', 'class' => 'form-control', 'dropdown-menu', 'placeholder'=>'Selecione o Macro-região'])!!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('usuarios.index') !!}" class="btn btn-default">Cancelar</a>
</div>