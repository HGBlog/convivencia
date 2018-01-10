<!-- No Casa Convivencia Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('no_casa_convivencia', 'No Casa Convivencia:'); ?>

    <?php echo Form::text('no_casa_convivencia', null, ['class' => 'form-control']); ?>

</div>

<!-- Tipo Quarto Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('tipo_quarto_id', 'Tipo de Quarto'); ?>

    <?php echo Form::select('tipo_quarto_id', $quartos, $acolhida->pluck('tipo_quarto_id'), ['id' => 'tipo_quarto_id', 'class' => 'form-control', 'dropdown-menu']); ?>

</div>

<!-- Dt Chegada Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('dt_chegada', 'Dt Chegada:'); ?>

    <?php echo Form::date('dt_chegada', Carbon\Carbon::parse($acolhida->dt_chegada)->format('Y-m-d'), ['class' => 'form-control']); ?>

</div>

<!-- Nu Hora Chegada Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nu_hora_chegada', 'Nu Hora Chegada:'); ?>

    <?php echo Form::number('nu_hora_chegada', null, ['class' => 'form-control']); ?>

</div>

<!-- Nu Voo Chegada Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nu_voo_chegada', 'Nu Voo Chegada:'); ?>

    <?php echo Form::text('nu_voo_chegada', null, ['class' => 'form-control']); ?>

</div>

<!-- Dt Saida Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('dt_saida', 'Dt Saida:'); ?>

    <?php echo Form::date('dt_saida', Carbon\Carbon::parse($acolhida->dt_saida)->format('Y-m-d'), ['class' => 'form-control']); ?>

</div>

<!-- Nu Hora Saida Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nu_hora_saida', 'Nu Hora Saida:'); ?>

    <?php echo Form::number('nu_hora_saida', null, ['class' => 'form-control']); ?>

</div>

<!-- Nu Voo Saida Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nu_voo_saida', 'Nu Voo Saida:'); ?>

    <?php echo Form::text('nu_voo_saida', null, ['class' => 'form-control']); ?>

</div>

<!-- Tipo Quarto Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('acolhida_extra_id', 'Acolhimento Extra'); ?>

    <?php echo Form::select('acolhida_extra_id', $acolhida_extra, $acolhida->pluck('acolhida_extra_id'), ['id' => 'acolhida_extra_id', 'class' => 'form-control', 'dropdown-menu']); ?>

</div>

<!-- No Observacoes Field -->
<div class="form-group col-sm-12 col-lg-12">
    <?php echo Form::label('no_observacoes', 'No Observacoes:'); ?>

    <?php echo Form::textarea('no_observacoes', null, ['class' => 'form-control', 'rows' => '5']); ?>

</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('acolhidas.index'); ?>" class="btn btn-default">Cancel</a>
</div>
