<!-- Is Ativo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('is_ativo', 'Is Ativo:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('is_ativo', false) !!}
        {!! Form::checkbox('is_ativo', '1', null) !!} 1
    </label>
</div>

<!-- Local Convivencia Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('local_convivencia_id', 'Local Convivencia Id:') !!}
    {!! Form::number('local_convivencia_id', null, ['class' => 'form-control']) !!}
</div>

<!-- No Nome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('no_nome', 'No Nome:') !!}
    {!! Form::text('no_nome', null, ['class' => 'form-control']) !!}
</div>

<!-- No Observacoes Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('no_observacoes', 'No Observacoes:') !!}
    {!! Form::textarea('no_observacoes', null, ['class' => 'form-control']) !!}
</div>

<!-- Dt Inicio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dt_inicio', 'Dt Inicio:') !!}
    {!! Form::date('dt_inicio', null, ['class' => 'form-control']) !!}
</div>

<!-- Dt Fim Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dt_fim', 'Dt Fim:') !!}
    {!! Form::date('dt_fim', null, ['class' => 'form-control']) !!}
</div>

<!-- Dt Inicio Inscricao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dt_inicio_inscricao', 'Dt Inicio Inscricao:') !!}
    {!! Form::date('dt_inicio_inscricao', null, ['class' => 'form-control']) !!}
</div>

<!-- Dt Fim Inscricao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dt_fim_inscricao', 'Dt Fim Inscricao:') !!}
    {!! Form::date('dt_fim_inscricao', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('removerConvivencias.index') !!}" class="btn btn-default">Cancel</a>
</div>
