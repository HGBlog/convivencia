<!-- Ativo Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('is_ativo', 'No Nome:'); ?>

    <?php echo Form::checkbox('is_ativo', 1, true, ['class' => 'form-control']); ?>

</div>
<!-- No Nome Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('no_nome', 'No Nome:'); ?>

    <?php echo Form::text('no_nome', null, ['class' => 'form-control']); ?>

</div>
<!-- No Local Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('no_local', 'No Local:'); ?>

    <?php echo Form::text('no_local', null, ['class' => 'form-control']); ?>

</div>

<!-- Nu Telefone Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nu_telefone', 'Nu Telefone:'); ?>

    <?php echo Form::number('nu_telefone', null, ['class' => 'form-control']); ?>

</div>

<!-- No Observacoes Field -->
<div class="form-group col-sm-12 col-lg-12">
    <?php echo Form::label('no_observacoes', 'No Observacoes:'); ?>

    <?php echo Form::textarea('no_observacoes', null, ['class' => 'form-control', 'rows' => '5']); ?>

</div>


<!-- Dt Inicio Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('dt_inicio', 'Dt Inicio:'); ?>

    <?php echo Form::date('dt_inicio', Carbon\Carbon::parse($convivencia->dt_inicio)->format('Y-m-d'), ['class' => 'form-control col-md-7 col-xs-12']); ?>

</div>

<!-- Dt Fim Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('dt_fim', 'Dt Fim:'); ?>

    <?php echo Form::date('dt_fim', Carbon\Carbon::parse($convivencia->dt_fim)->format('Y-m-d'), ['class' => 'form-control col-md-7 col-xs-12']); ?>

</div>

<!-- Dt Inicio Inscricao Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('dt_inicio_inscricao', 'Dt Inicio Inscricao:'); ?>

    <?php echo Form::date('dt_inicio_inscricao', Carbon\Carbon::parse($convivencia->dt_inicio_inscricao)->format('Y-m-d'), ['class' => 'form-control col-md-7 col-xs-12']); ?>

</div>

<!-- Dt Fim Inscricao Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('dt_fim_inscricao', 'Dt Fim Inscricao:'); ?>

    <?php echo Form::date('dt_fim_inscricao', Carbon\Carbon::parse($convivencia->dt_fim_inscricao)->format('Y-m-d'), ['class' => 'form-control col-md-7 col-xs-12']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('convivencias.index'); ?>" class="btn btn-default">Cancel</a>
</div>
