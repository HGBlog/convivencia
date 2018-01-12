<!-- Ativo Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('is_ativo', 'Habilitada:'); ?>

    <?php echo Form::checkbox('is_ativo', 1, true, ['class' => 'form-control']); ?>

</div>
<!-- No Nome Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('no_nome', 'Nome:'); ?>

    <?php echo Form::text('no_nome', null, ['class' => 'form-control']); ?>

</div>
<!-- No Local Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('no_local', 'Local:'); ?>

    <?php echo Form::text('no_local', null, ['class' => 'form-control']); ?>

</div>

<!-- Nu Telefone Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nu_telefone', 'Telefone:'); ?>

    <?php echo Form::number('nu_telefone', null, ['class' => 'form-control']); ?>

</div>

<!-- No Observacoes Field -->
<div class="form-group col-sm-12 col-lg-12">
    <?php echo Form::label('no_observacoes', 'Observações:'); ?>

    <?php echo Form::textarea('no_observacoes', null, ['class' => 'form-control', 'rows' => '5']); ?>

</div>


<!-- Dt Inicio Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('dt_inicio', 'Data Início:'); ?>

    <?php echo Form::date('dt_inicio', Carbon\Carbon::parse($convivencia->dt_inicio)->format('Y-m-d'), ['class' => 'form-control col-md-7 col-xs-12']); ?>

</div>

<!-- Dt Fim Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('dt_fim', 'Data Fim:'); ?>

    <?php echo Form::date('dt_fim', Carbon\Carbon::parse($convivencia->dt_fim)->format('Y-m-d'), ['class' => 'form-control col-md-7 col-xs-12']); ?>

</div>

<!-- Dt Inicio Inscricao Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('dt_inicio_inscricao', 'Início Inscrições:'); ?>

    <?php echo Form::date('dt_inicio_inscricao', Carbon\Carbon::parse($convivencia->dt_inicio_inscricao)->format('Y-m-d'), ['class' => 'form-control col-md-7 col-xs-12']); ?>

</div>

<!-- Dt Fim Inscricao Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('dt_fim_inscricao', 'Término Inscrições:'); ?>

    <?php echo Form::date('dt_fim_inscricao', Carbon\Carbon::parse($convivencia->dt_fim_inscricao)->format('Y-m-d'), ['class' => 'form-control col-md-7 col-xs-12']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Salvar', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('convivencias.index'); ?>" class="btn btn-default">Cancel</a>
</div>
