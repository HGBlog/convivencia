<!-- No Estado Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('no_estado', 'Nome Estado:'); ?>

    <?php echo Form::text('no_estado', null, ['class' => 'form-control']); ?>

</div>
<div class="form-group col-sm-6">
    <?php echo Form::label('no_sigla', 'Sigla:'); ?>

    <?php echo Form::text('no_sigla', null, ['class' => 'form-control', 'placeholder'=>'Sigla com até 4 caracteres', 'maxlength' => '4']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Salvar', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('estados.index'); ?>" class="btn btn-default">Cancelar</a>
</div>
