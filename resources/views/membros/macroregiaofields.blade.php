<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('no_usuario', 'Nome:') !!}
    {!! Form::text('no_usuario', null, ['class' => 'form-control', 'readonly']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('mregiao_id', 'Macro-região') !!}
    {!! Form::select('mregiao_id', $macroregiaos, $membro->mregiao_id, ['id' => 'mregiao_id', 'class' => 'form-control', 'dropdown-menu', 'placeholder'=>'Selecione a Macro-região'])!!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('membros.macroregiao') !!}" class="btn btn-default">Cancelar</a>
</div>