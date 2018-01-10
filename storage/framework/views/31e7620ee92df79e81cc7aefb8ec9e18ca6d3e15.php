<!-- No Acolhida Extra Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('no_acolhida_extra', 'No Acolhida Extra:'); ?>

    <?php echo Form::text('no_acolhida_extra', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('acolhidaExtras.index'); ?>" class="btn btn-default">Cancel</a>
</div>
