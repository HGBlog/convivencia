<!-- No Etapa Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('no_etapa', 'No Etapa:'); ?>

    <?php echo Form::text('no_etapa', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Salvar', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('etapas.index'); ?>" class="btn btn-default">Cancel</a>
</div>
