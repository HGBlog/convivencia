<!-- No Acolhida Extra Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('no_acolhida_extra', 'Nome acolhimento extra:'); ?>

    <?php echo Form::text('no_acolhida_extra', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Salvar', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('acolhidaExtras.index'); ?>" class="btn btn-default">Cancel</a>
</div>
