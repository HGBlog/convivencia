<!-- No Quarto Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('no_quarto', 'Nome do Tipo de Quarto:'); ?>

    <?php echo Form::text('no_quarto', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Salvar', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('tipoQuartos.index'); ?>" class="btn btn-default">Cancel</a>
</div>
