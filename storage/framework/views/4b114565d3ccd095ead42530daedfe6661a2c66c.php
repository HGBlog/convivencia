<!-- No Usuario Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('no_usuario', 'No Usuario:'); ?>

    <?php echo Form::text('no_usuario', null, ['class' => 'form-control']); ?>

</div>

<!-- No Pais Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('no_pais', 'No Pais:'); ?>

    <?php echo Form::text('no_pais', null, ['class' => 'form-control']); ?>

</div>

<!-- No Email Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('no_email', 'No Email:'); ?>

    <?php echo Form::email('no_email', null, ['class' => 'form-control']); ?>

</div>

<!-- No Sexo Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('no_sexo', 'No Sexo:'); ?>

    <?php echo Form::select('no_sexo', ['M' => 'Masculino', 'F' => 'Feminino'], null, ['class' => 'form-control']); ?>

</div>

<!-- Co Telefone Pais Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('co_telefone_pais', 'Co Telefone Pais:'); ?>

    <?php echo Form::number('co_telefone_pais', null, ['class' => 'form-control']); ?>

</div>

<!-- Nu Telefone Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nu_telefone', 'Nu Telefone:'); ?>

    <?php echo Form::number('nu_telefone', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('perfilUsuarios.index'); ?>" class="btn btn-default">Cancel</a>
</div>
