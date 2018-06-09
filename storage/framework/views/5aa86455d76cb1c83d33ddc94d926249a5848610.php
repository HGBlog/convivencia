<!-- No Diocese Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('no_diocese', 'Nome da Diocese:'); ?>

    <?php echo Form::text('no_diocese', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Salvar', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('dioceses.index'); ?>" class="btn btn-default">Cancelar</a>
</div>
