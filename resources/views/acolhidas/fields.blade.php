<!-- No Casa Convivencia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('no_casa_convivencia', 'Nome da Casa de Convivência:') !!}
    {!! Form::text('no_casa_convivencia', null, ['class' => 'form-control', 'placeholder'=>'Este campo estava reservado para informar Hotel']) !!}
</div>

<!-- Tipo Quarto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_quarto_id', 'Tipo de Quarto') !!}
    {!! Form::select('tipo_quarto_id', $quartos, $acolhida->pluck('tipo_quarto_id'), ['id' => 'tipo_quarto_id', 'class' => 'form-control', 'dropdown-menu'])!!}
</div>

<!-- Dt Chegada Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dt_chegada', 'Data de chegada:') !!}
    {!! Form::date('dt_chegada', Carbon\Carbon::parse($acolhida->dt_chegada)->format('Y-m-d'), ['class' => 'form-control', 'placeholder'=>'dd-mm-AAAA']) !!}
</div>

<!-- Nu Hora Chegada Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nu_hora_chegada', 'Hora de chegada:') !!}
    {!! Form::text('nu_hora_chegada', null, ['class' => 'form-control']) !!}

</div>

<!-- Nu Voo Chegada Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nu_voo_chegada', 'Número vôo:') !!}
    {!! Form::text('nu_voo_chegada', null, ['class' => 'form-control', 'placeholder'=>'Número do vôo se for o caso']) !!}
</div>

<!-- Dt Saida Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dt_saida', 'Data de saída:') !!}
    {!! Form::date('dt_saida', Carbon\Carbon::parse($acolhida->dt_saida)->format('Y-m-d'), ['class' => 'form-control','placeholder'=>'Formato dd-mm-AAAA']) !!}
</div>

<!-- Nu Hora Saida Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nu_hora_saida', 'Hora de saída:') !!}
    {!! Form::text('nu_hora_saida', null, ['class' => 'form-control']) !!}
</div>

<!-- Nu Voo Saida Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nu_voo_saida', 'Número vôo:') !!}
    {!! Form::text('nu_voo_saida', null, ['class' => 'form-control', 'placeholder'=>'Número do vôo se for o caso']) !!}
</div>

<!-- Tipo Quarto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('acolhida_extra_id', 'Acolhimento Extra') !!}
    {!! Form::select('acolhida_extra_id', $acolhida_extra, $acolhida->pluck('acolhida_extra_id'), ['id' => 'acolhida_extra_id', 'class' => 'form-control', 'dropdown-menu'])!!}
</div>

<!-- No Observacoes Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('no_observacoes', 'Observações:') !!}
    {!! Form::textarea('no_observacoes', null, ['class' => 'form-control', 'rows' => '5']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('acolhidas.index') !!}" class="btn btn-default">Cancel</a>
</div>
