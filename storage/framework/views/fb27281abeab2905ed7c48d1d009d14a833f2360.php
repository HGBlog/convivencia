<!-- No Carisma Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('no_carisma', 'No Carisma:'); ?>

    <?php echo Form::text('no_carisma', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('tipoCarismas.index'); ?>" class="btn btn-default">Cancel</a>
</div>
