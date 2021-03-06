<!-- Ativo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('is_ativo', 'Habilitada:') !!}
    <label class="checkbox-inline">
        {!! Form::checkbox('is_ativo', true, $convivencia->is_ativo,  ['data-toggle' => 'toggle', 'data-on' => 'Sim',  'data-off' => 'Não',  'data-onstyle' => 'success',  'data-offstyle' => 'danger', 'data-size' => 'mini']) !!}
    </label>
</div>

<!-- No Nome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('no_nome', 'Nome:') !!}
    {!! Form::text('no_nome', null, ['class' => 'form-control', 'maxlength' => '99']) !!}
</div>
<!-- Local Convivencia id Field -->

<div class="form-group col-sm-6">
    {!! Form::label('local_convivencia_id', 'Local da Convivência:') !!}
    {!! Form::select('local_convivencia_id', $locais, $convivencia->local_convivencia_id, ['id' => 'local_convivencia_id', 'class' => 'form-control', 'dropdown-menu'])!!}
</div>
<!-- No Observacoes Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('no_observacoes', 'Observações:') !!}
    {!! Form::textarea('no_observacoes', null, ['class' => 'form-control', 'rows' => '5']) !!}
</div>

<!-- Dt Inicio Field -->

<!-- Dt Fim Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dt_inicio', 'Data Início:') !!}
    {!! Form::date('dt_inicio', Carbon\Carbon::parse($convivencia->dt_inicio)->format('Y-m-d'), ['class' => 'form-control col-md-7 col-xs-12'])!!}
</div>

<!-- Dt Fim Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dt_fim', 'Data Fim:') !!}
    {!! Form::date('dt_fim', Carbon\Carbon::parse($convivencia->dt_fim)->format('Y-m-d'), ['class' => 'form-control col-md-7 col-xs-12'])!!}
</div>

<!-- Dt Inicio Inscricao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dt_inicio_inscricao', 'Início Inscrições:') !!}
    {!! Form::date('dt_inicio_inscricao', Carbon\Carbon::parse($convivencia->dt_inicio_inscricao)->format('Y-m-d'), ['class' => 'form-control col-md-7 col-xs-12'])!!}
</div>

<!-- Dt Fim Inscricao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dt_fim_inscricao', 'Término Inscrições:') !!}
    {!! Form::date('dt_fim_inscricao', Carbon\Carbon::parse($convivencia->dt_fim_inscricao)->format('Y-m-d'), ['class' => 'form-control col-md-7 col-xs-12'])!!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('convivencias.index') !!}" class="btn btn-default">Cancel</a>
</div>
